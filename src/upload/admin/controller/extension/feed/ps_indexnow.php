<?php
class ControllerExtensionFeedPsIndexNow extends Controller
{
    /**
     * @var string The support email address.
     */
    const EXTENSION_EMAIL = 'support@playfulsparkle.com';

    /**
     * @var string The documentation URL for the extension.
     */
    const EXTENSION_DOC = 'https://github.com/playfulsparkle/oc4_indexnow.git';

    private $error = array();

    /**
     * Displays the IndexNow settings page.
     *
     * This method loads the necessary language file, sets the title of the page,
     * and prepares the data for the view. It also generates the breadcrumbs for
     * navigation and retrieves configuration settings for the sitemap.
     *
     * @return void
     */
    public function index()
    {
        $this->load->language('extension/feed/ps_indexnow');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('feed_ps_indexnow', $this->request->post, $this->request->get['store_id']);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=feed', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['service_key'])) {
            $data['error_service_key'] = $this->error['service_key'];
        } else {
            $data['error_service_key'] = '';
        }

        if (isset($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=feed', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/feed/ps_indexnow', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true)
        );

        $data['action'] = $this->url->link('extension/feed/ps_indexnow', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=feed', true);

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['feed_ps_indexnow_status'])) {
            $data['feed_ps_indexnow_status'] = (bool) $this->request->post['feed_ps_indexnow_status'];
        } else {
            $data['feed_ps_indexnow_status'] = (bool) $this->model_setting_setting->getSettingValue('feed_ps_indexnow_status', $store_id);
        }

        if (isset($this->request->post['feed_ps_indexnow_service_status'])) {
            $data['feed_ps_indexnow_service_status'] = (array) $this->request->post['feed_ps_indexnow_service_status'];
        } else {
            $service_status = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_status', $store_id);

            if (!is_array($service_status)) {
                $service_status = (array) json_decode((string) $service_status, true);
            }

            $data['feed_ps_indexnow_service_status'] = $service_status;
        }

        if (isset($this->request->post['feed_ps_indexnow_service_key'])) {
            $data['feed_ps_indexnow_service_key'] = $this->request->post['feed_ps_indexnow_service_key'];
        } else {
            $data['feed_ps_indexnow_service_key'] = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key', $store_id);
        }

        if (isset($this->request->post['feed_ps_indexnow_service_key_location'])) {
            $data['feed_ps_indexnow_service_key_location'] = $this->request->post['feed_ps_indexnow_service_key_location'];
        } else {
            $data['feed_ps_indexnow_service_key_location'] = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key_location', $store_id);
        }

        if ($data['feed_ps_indexnow_service_key_location']) {
            if ($this->request->server['HTTPS']) {
                $server = HTTPS_CATALOG;
            } else {
                $server = HTTP_CATALOG;
            }

            if (isset($this->request->get['store_id']) && (int) $this->request->get['store_id'] > 0) {
                $this->load->model('setting/store');

                $store = $this->model_setting_store->getStore((int) $this->request->get['store_id']);

                if ($store) {
                    $server = $store['url'];
                }
            }

            $data['feed_ps_indexnow_service_key_url'] = $server . $data['feed_ps_indexnow_service_key_location'];
        } else {
            $data['feed_ps_indexnow_service_key_url'] = '';
        }

        if (isset($this->request->post['feed_ps_indexnow_content_category'])) {
            $data['feed_ps_indexnow_content_category'] = (array) $this->request->post['feed_ps_indexnow_content_category'];
        } else {
            $content_category = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_content_category', $store_id);

            if (!is_array($content_category)) {
                $content_category = (array) json_decode((string) $content_category, true);
            }

            $data['feed_ps_indexnow_content_category'] = $content_category;
        }


        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['store_id'] = $store_id;

        $data['stores'] = array();

        $data['stores'][] = array(
            'store_id' => 0,
            'name' => $this->config->get('config_name') . '&nbsp;' . $this->language->get('text_default'),
            'href' => $this->url->link('extension/feed/ps_indexnow', 'user_token=' . $this->session->data['user_token'] . '&store_id=0'),
        );

        $this->load->model('setting/store');

        $stores = $this->model_setting_store->getStores();

        foreach ($stores as $store) {
            $data['stores'][] = array(
                'store_id' => $store['store_id'],
                'name' => $store['name'],
                'href' => $this->url->link('extension/feed/ps_indexnow', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store['store_id']),
            );
        }

        $this->load->model('extension/feed/ps_indexnow');

        $data['indexnow_services'] = $this->model_extension_feed_ps_indexnow->getIndexNowServiceList();

        $data['content_categories'] = array(
            'category' => $this->language->get('text_categories'),
            'product' => $this->language->get('text_products'),
            'manufacturer' => $this->language->get('text_manufacturers'),
            'information' => $this->language->get('text_information'),
        );

        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/feed/ps_indexnow', $data));
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/feed/ps_indexnow')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->error && !isset($this->request->post['store_id'])) {
            $this->error['warning'] = $this->language->get('error_store_id');
        }

        if (!$this->error) {
            $required_keys = array('feed_ps_indexnow_service_key');

            foreach ($required_keys as $value) {
                if (!isset($this->request->post[$value])) {
                    $this->request->post[$value] = '';
                }
            }

            if (empty($this->request->post['feed_ps_indexnow_service_key'])) {
                $this->error['service_key'] = $this->language->get('error_service_key');
            }
        }

        return !$this->error;
    }

    public function install()
    {
        if (is_writable(dirname(DIR_APPLICATION))) {
            $service_key = $this->generateServiceKey();

            $filename = dirname(DIR_APPLICATION) . DIRECTORY_SEPARATOR . $service_key . '.txt';

            $handle = fopen($filename, 'w');

            if ($handle) {
                fwrite($handle, $service_key);

                fclose($handle);

                $this->load->model('setting/setting');

                $data = array(
                    'feed_ps_indexnow_service_key' => $service_key,
                    'feed_ps_indexnow_service_key_location' => $service_key . '.txt',
                );

                $this->model_setting_setting->editSetting('feed_ps_indexnow', $data);
            }
        }

        $this->load->model('extension/feed/ps_indexnow');

        $this->model_extension_feed_ps_indexnow->install();

    }

    public function uninstall()
    {
        $this->load->model('extension/feed/ps_indexnow');

        $this->model_extension_feed_ps_indexnow->uninstall();
    }

    public function generate_service_key()
    {
        $this->load->language('extension/feed/ps_indexnow');

        $json = [];

        if (!$this->user->hasPermission('modify', 'extension/feed/ps_indexnow')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json) {
            $service_key = $this->generateServiceKey();

            $filename = dirname(DIR_APPLICATION) . DIRECTORY_SEPARATOR . $service_key . '.txt';

            if (is_writable(dirname(DIR_APPLICATION))) {
                $handle = fopen($filename, 'w');

                if ($handle) {
                    fwrite($handle, $service_key);

                    fclose($handle);

                    if ($this->request->server['HTTPS']) {
                        $server = HTTPS_CATALOG;
                    } else {
                        $server = HTTP_CATALOG;
                    }

                    if (isset($this->request->get['store_id']) && (int) $this->request->get['store_id'] > 0) {
                        $this->load->model('setting/store');

                        $store = $this->model_setting_store->getStore((int) $this->request->get['store_id']);

                        if ($store) {
                            $server = $store['url'];
                        }
                    }

                    $json['service_key'] = $service_key;
                    $json['service_key_location'] = $service_key . '.txt';
                    $json['service_key_url'] = $server . $service_key . '.txt';

                    $json['success'] = $this->language->get('text_success_generate_service_key');
                } else {
                    $json['error'] = $this->language->get('error_generate_service_key');
                }
            } else {
                $json['error'] = $this->language->get('error_generate_service_key');
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function queue()
    {
        $this->load->language('extension/feed/ps_indexnow');

        if (isset($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }

        if (isset($this->request->get['page'])) {
            $page = (int) $this->request->get['page'];
        } else {
            $page = 1;
        }

        $limit = 10;

        $filter_data = array(
            'store_id' => $store_id,
            'start' => ($page - 1) * $limit,
            'limit' => $limit
        );

        $this->load->model('extension/feed/ps_indexnow');

        $results = $this->model_extension_feed_ps_indexnow->getQueue($filter_data);

        $data['indexnow_queues'] = array();

        foreach ($results as $result) {
            $data['indexnow_queues'][] = array(
                'queue_id' => $result['queue_id'],
                'url' => $result['url'],
                'date_added' => date($this->language->get('datetime_format'), strtotime($result['date_added']))
            );
        }

        $queue_total = $this->model_extension_feed_ps_indexnow->getTotalQueue();

        $pagination = new Pagination();
        $pagination->total = $queue_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        $pagination->url = $this->url->link('extension/feed/ps_indexnow/queue', 'store_id= ' . $store_id . '&user_token=' . $this->session->data['user_token'] . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($queue_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($queue_total - $limit)) ? $queue_total : ((($page - 1) * $limit) + $limit), $queue_total, ceil($queue_total / $limit));

        $this->response->setOutput($this->load->view('extension/feed/ps_indexnow_queue', $data));
    }

    public function log()
    {
        $this->load->language('extension/feed/ps_indexnow');

        if (isset($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }

        if (isset($this->request->get['page'])) {
            $page = (int) $this->request->get['page'];
        } else {
            $page = 1;
        }

        $limit = 10;

        $filter_data = array(
            'store_id' => $store_id,
            'start' => ($page - 1) * $limit,
            'limit' => $limit
        );

        $this->load->model('extension/feed/ps_indexnow');

        $results = $this->model_extension_feed_ps_indexnow->getLog($filter_data);

        $data['indexnow_logs'] = array();

        foreach ($results as $result) {
            $data['indexnow_logs'][] = array(
                'log_id' => $result['log_id'],
                'service_name' => $result['service_name'],
                'url' => $result['url'],
                'status_code' => $result['status_code'],
                'date_added' => date($this->language->get('datetime_format'), strtotime($result['date_added']))
            );
        }

        $queue_total = $this->model_extension_feed_ps_indexnow->getTotalLog();

        $pagination = new Pagination();
        $pagination->total = $queue_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        $pagination->url = $this->url->link('extension/feed/ps_indexnow/log', 'store_id= ' . $store_id . '&user_token=' . $this->session->data['user_token'] . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($queue_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($queue_total - $limit)) ? $queue_total : ((($page - 1) * $limit) + $limit), $queue_total, ceil($queue_total / $limit));

        $this->response->setOutput($this->load->view('extension/feed/ps_indexnow_log', $data));
    }

    private function generateServiceKey()
    {
        $length = 32;
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-';
        $charactersLength = strlen($characters);
        $randomKey = '';

        // Try different secure random number generators in order of preference
        if (function_exists('random_bytes')) {
            try {
                for ($i = 0; $i < $length; $i++) {
                    $randomKey .= $characters[ord(random_bytes(1)) % $charactersLength];
                }
                return $randomKey;
            } catch (Exception $e) {
                // Fall through to next method
            }
        }

        if (function_exists('openssl_random_pseudo_bytes')) {
            try {
                for ($i = 0; $i < $length; $i++) {
                    $randomKey .= $characters[ord(openssl_random_pseudo_bytes(1)) % $charactersLength];
                }
                return $randomKey;
            } catch (Exception $e) {
                // Fall through to next method
            }
        }

        // Fallback to random_int if available
        if (function_exists('random_int')) {
            for ($i = 0; $i < $length; $i++) {
                $randomKey .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomKey;
        }

        // Last resort fallback to mt_rand
        for ($i = 0; $i < $length; $i++) {
            $randomKey .= $characters[mt_rand(0, $charactersLength - 1)];
        }

        return $randomKey;
    }
}

