<?php
namespace playfulsparkle;
class ps_indexnow
{
    private $data = [];

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
        $this->load->model('extension/ps_indexnow/feed/ps_indexnow');
        $this->load->model('localisation/language');
        $this->load->model('setting/store');

        $languages = $this->model_localisation_language->getLanguages();

        $this->processCategory($category_id, $category_store, $languages, 'add');
    }

    public function editCategory($category_id, $category_store)
    {
        $this->load->model('extension/ps_indexnow/feed/ps_indexnow');
        $this->load->model('localisation/language');
        $this->load->model('setting/store');

        $languages = $this->model_localisation_language->getLanguages();

        $this->processCategory($category_id, $category_store, $languages, 'update');
    }

    public function deleteCategory($categories)
    {
        $this->load->model('extension/ps_indexnow/feed/ps_indexnow');
        $this->load->model('localisation/language');
        $this->load->model('setting/store');

        $category_store = $this->model_setting_store->getStores();
        $languages = $this->model_localisation_language->getLanguages();

        foreach ($categories as $category_id) {
            $this->processCategory($category_id, $category_store, $languages, 'delete');
        }
    }

    private function processCategory($category_id, $category_store, $languages, $action)
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
                    'action' => $action,
                    'store_id' => $store_id,
                    'language_id' => $language['language_id'],
                ];

                $this->model_extension_ps_indexnow_feed_ps_indexnow->addQueue($data);
            }
        }
    }

    private function rewrite(string $link, int $store_id, int $language_id): string
    {
        $url_info = parse_url($link);

        // Build the url
        $url = '';

        if ($url_info['scheme']) {
            $url .= $url_info['scheme'];
        }

        $url .= '://';

        if ($url_info['host']) {
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

            if (isset($pair[0])) {
                $key = (string) $pair[0];
            }

            if (isset($pair[1])) {
                $value = (string) $pair[1];
            } else {
                $value = '';
            }

            $index = md5($key . '-' . $value . '-store_id-' . $store_id . '-language_id-' . $language_id);

            if (!isset($this->data[$index])) {
                $this->data[$index] = $this->model_extension_feed_ps_indexnow->getSeoUrlByKeyValue((string) $key, (string) $value, $store_id, $language_id);
            }

            if ($this->data[$index]) {
                $paths[] = $this->data[$index];

                unset($query[$key]);
            }
        }

        $sort_order = [];

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

