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

    public function addToQueueItemData($item_category, $item_link, $item_stores, $content_hash, $languages)
    {
        $stores = array();

        foreach ($item_stores as $store_info) {
            if (is_array($store_info)) {
                $stores[$store_info['store_id']] = ($this->request->server['HTTPS'] && !empty($store_info['ssl'])) ? $store_info['ssl'] : $store_info['url'];
            } else if (is_numeric($store_info)) {
                $store_id = (int) $store_info;

                if ($store_id === 0) {
                    $stores[$store_id] = $this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG;
                } else if ($store_data = $this->model_setting_store->getStore($store_id)) {
                    $stores[$store_id] = ($this->request->server['HTTPS'] && !empty($store_data['ssl'])) ? $store_data['ssl'] : $store_data['url'];
                }
            }
        }

        if (!$stores) {
            return;
        }

        foreach ($stores as $store_id => $store_url) {
            if (!$this->model_setting_setting->getSettingValue('feed_ps_indexnow_status', $store_id)) {
                continue;
            }

            $content_categories = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_content_category', $store_id);

            /**
             * @var array $content_categories
             */
            $content_categories = json_decode((string) $content_categories, true);

            $content_categories = json_last_error() === JSON_ERROR_NONE ? $content_categories : array();

            if (!$content_categories || !in_array($item_category, $content_categories)) {
                continue;
            }

            if ($this->config->get('config_seo_url')) {
                foreach ($languages as $language) {
                    $url = $this->rewrite($store_url . $item_link, $store_id, $language['language_id']);

                    if (strpos($url, 'index.php?route') !== false) {
                        continue;
                    }

                    $data = array(
                        'url' => $url,
                        'content_hash' => $content_hash,
                        'store_id' => $store_id,
                        'language_id' => $language['language_id'],
                    );

                    $this->model_extension_feed_ps_indexnow->addQueue($data);
                }
            } else {
                $data = array(
                    'url' => $store_url . $item_link,
                    'content_hash' => $content_hash,
                    'store_id' => $store_id,
                    'language_id' => 0,
                );

                $this->model_extension_feed_ps_indexnow->addQueue($data);
            }
        }
    }

    private function rewrite($link, $store_id, $language_id)
    {
        $url_info = parse_url($link);

        $url = '';

        $data = array();

        parse_str($url_info['query'], $data);

        foreach ($data as $key => $value) {
            if (isset($data['route'])) {
                if (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id')) {
                    $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int) $value) . "' AND store_id = '" . (int) $store_id . "' AND language_id = '" . (int) $language_id . "'");

                    if ($query->num_rows && $query->row['keyword']) {
                        $url .= '/' . $query->row['keyword'];

                        unset($data[$key]);
                    }
                } elseif ($key == 'path') {
                    $categories = explode('_', $value);

                    foreach ($categories as $category) {
                        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'category_id=" . (int) $category . "' AND store_id = '" . (int) $store_id . "' AND language_id = '" . (int) $language_id . "'");

                        if ($query->num_rows && $query->row['keyword']) {
                            $url .= '/' . $query->row['keyword'];
                        } else {
                            $url = '';

                            break;
                        }
                    }

                    unset($data[$key]);
                }
            }
        }

        if ($url) {
            unset($data['route']);

            $query = '';

            if ($data) {
                foreach ($data as $key => $value) {
                    $query .= '&' . rawurlencode((string) $key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string) $value));
                }

                if ($query) {
                    $query = '?' . str_replace('&', '&amp;', trim($query, '&'));
                }
            }

            return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
        } else {
            return $link;
        }
    }
}

