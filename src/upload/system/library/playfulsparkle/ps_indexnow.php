<?php
namespace playfulsparkle;
class ps_indexnow
{
    private $seo_url_values = array();

    private $registry;

    public function __construct($registry)
    {
        $this->registry = $registry;
    }

    public function __get($name)
    {
        return $this->registry->get($name);
    }

    public function __set($name, $value)
    {
        $this->registry->set($name, $value);
    }

    public function addCategory($category_id, $category_store)
    {
        $this->load->model('extension/feed/ps_indexnow');
        $this->load->model('localisation/language');
        $this->load->model('setting/store');

        $languages = $this->model_localisation_language->getLanguages();

        $this->processCategory($category_id, $category_store, $languages);
    }

    public function editCategory($category_id, $category_store)
    {
        $this->load->model('extension/feed/ps_indexnow');
        $this->load->model('localisation/language');
        $this->load->model('setting/store');

        $languages = $this->model_localisation_language->getLanguages();

        $this->processCategory($category_id, $category_store, $languages);
    }

    public function deleteCategory($categories)
    {
        $this->load->model('extension/feed/ps_indexnow');
        $this->load->model('localisation/language');
        $this->load->model('setting/store');

        $category_store = $this->model_setting_store->getStores();
        $languages = $this->model_localisation_language->getLanguages();

        foreach ($categories as $category_id) {
            $this->processCategory($category_id, $category_store, $languages);
        }
    }

    private function processCategory($category_id, $category_store, $languages)
    {
        $stores = [0 => HTTP_CATALOG];

        foreach ($category_store as $store_id) {
            if ($store_id === 0) {
                continue;
            }

            $store_info = isset($this->store_info[$store_id]) ? $this->store_info[$store_id] : $this->model_setting_store->getStore($store_id);

            $this->store_info[$store_id] = $store_info;

            if ($store_info) {
                $stores[$store_info['store_id']] = $store_info['url'];
            }
        }

        foreach ($stores as $store_id => $store_url) {
            foreach ($languages as $language) {
                $link = $stores[$store_id] . 'index.php?route=product/category&language=' . $language['code'] . '&path=' . $category_id;

                if ($this->config->get('config_seo_url')) {
                    $link = $this->rewrite($link, $store_id, $language['language_id']);
                }

                $data = [
                    'url' => $link,
                    'content_category' => 'category',
                    'content_hash' => md5(json_encode($this->request->post)),
                    'store_id' => $store_id,
                    'language_id' => $language['language_id'],
                ];

                $this->model_extension_feed_ps_indexnow->addQueue($data);
            }
        }
    }

    private function rewrite($link, $store_id, $language_id)
    {
        $url_info = parse_url($link);

        // Build the url
        $url = '';

        if (isset($url_info['scheme'])) {
            $url .= $url_info['scheme'];
        }

        $url .= '://';

        if (isset($url_info['host'])) {
            $url .= $url_info['host'];
        }

        if (isset($url_info['port'])) {
            $url .= ':' . $url_info['port'];
        }

        parse_str($url_info['query'], $query);

        // Start changing the URL query into a path
        $paths = [];

        // Parse the query into its separate parts
        $parts = explode('&', $url_info['query']);

        foreach ($parts as $part) {
            $pair = explode('=', $part);

            $key = isset($pair[0]) ? (string) $pair[0] : '';
            $value = isset($pair[1]) ? (string) $pair[1] : '';

            $index = md5($key . '-' . $value . '-' . $store_id . '-' . $language_id);

            if (!isset($this->seo_url_values[$index])) {
                $this->seo_url_values[$index] = $this->model_extension_feed_ps_indexnow->getSeoUrlByKeyValue($key, $value, $store_id, $language_id);
            }

            if ($this->seo_url_values[$index]) {
                $paths[] = $this->seo_url_values[$index];

                unset($query[$key]);
            }
        }

        $sort_order = array();

        foreach ($paths as $key => $value) {
            $sort_order[$key] = $value['sort_order'];
        }

        array_multisort($sort_order, SORT_ASC, $paths);

        // Build the path
        $url .= str_replace('/index.php', '', $url_info['path']);

        foreach ($paths as $result) {
            $url .= '/' . $result['keyword'];
        }

        // Rebuild the URL query
        if ($query) {
            $url .= '?' . str_replace(['%2F'], ['/'], http_build_query($query));
        }

        return $url;
    }
}

