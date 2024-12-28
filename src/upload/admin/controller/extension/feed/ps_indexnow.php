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
        $this->load->model('setting/store');
        $this->load->model('localisation/language');
        $this->load->model('extension/feed/ps_indexnow');

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

        $server = $this->get_store_url($store_id);

        if (isset($this->request->post['feed_ps_indexnow_status'])) {
            $data['feed_ps_indexnow_status'] = (bool) $this->request->post['feed_ps_indexnow_status'];
        } else {
            $data['feed_ps_indexnow_status'] = (bool) $this->model_setting_setting->getSettingValue('feed_ps_indexnow_status', $store_id);
        }

        if (isset($this->request->post['feed_ps_indexnow_service_status'])) {
            $data['feed_ps_indexnow_service_status'] = (array) $this->request->post['feed_ps_indexnow_service_status'];
        } else {
            $service_status = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_status', $store_id);

            $service_status = json_decode((string) $service_status, true);

            $data['feed_ps_indexnow_service_status'] = (json_last_error() === JSON_ERROR_NONE) ? (array) $service_status : array();
        }

        if (isset($this->request->post['feed_ps_indexnow_service_key'])) {
            $data['feed_ps_indexnow_service_key'] = (string) $this->request->post['feed_ps_indexnow_service_key'];
        } else {
            $data['feed_ps_indexnow_service_key'] = (string) $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key', $store_id);
        }

        if (isset($this->request->post['feed_ps_indexnow_service_key_location'])) {
            $data['feed_ps_indexnow_service_key_location'] = (string) $this->request->post['feed_ps_indexnow_service_key_location'];
        } else {
            $data['feed_ps_indexnow_service_key_location'] = (string) $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key_location', $store_id);
        }

        if ($data['feed_ps_indexnow_service_key_location']) {
            $data['feed_ps_indexnow_service_key_url'] = $server . $data['feed_ps_indexnow_service_key_location'];
        } else {
            $data['feed_ps_indexnow_service_key_url'] = '';
        }

        if (isset($this->request->post['feed_ps_indexnow_content_category'])) {
            $data['feed_ps_indexnow_content_category'] = (array) $this->request->post['feed_ps_indexnow_content_category'];
        } else {
            $content_category = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_content_category', $store_id);

            $content_category = json_decode((string) $content_category, true);

            $data['feed_ps_indexnow_content_category'] = (json_last_error() === JSON_ERROR_NONE) ? (array) $content_category : array();
        }

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['store_id'] = $store_id;

        $data['stores'] = array();

        $data['stores'][] = array(
            'store_id' => 0,
            'name' => $this->config->get('config_name') . '&nbsp;' . $this->language->get('text_default'),
            'href' => $this->url->link('extension/feed/ps_indexnow', 'user_token=' . $this->session->data['user_token'] . '&store_id=0'),
        );

        $stores = $this->model_setting_store->getStores();

        foreach ($stores as $store) {
            $data['stores'][] = array(
                'store_id' => $store['store_id'],
                'name' => $store['name'],
                'href' => $this->url->link('extension/feed/ps_indexnow', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store['store_id']),
            );
        }

        $data['server'] = $server;

        $data['cron_url'] = ($this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG) . 'index.php?route=extension/feed/ps_indexnow';

        $data['indexnow_services'] = $this->model_extension_feed_ps_indexnow->getIndexNowServiceList();

        $data['content_categories'] = array(
            'category' => $this->language->get('text_categories'),
            'product' => $this->language->get('text_products'),
            'manufacturer' => $this->language->get('text_manufacturers'),
            'information' => $this->language->get('text_information'),
        );

        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['text_url_list_warning'] = sprintf($this->language->get('text_url_list_warning'), parse_url($server, PHP_URL_HOST));

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
        $this->load->model('setting/store');
        $this->load->model('setting/setting');

        $stores = array_merge(array(0), array_column($this->model_setting_store->getStores(), 'store_id'));

        foreach ($stores as $store_id) {
            $service_key = $this->save_service_key();

            $data = array(
                'feed_ps_indexnow_service_key' => $service_key,
                'feed_ps_indexnow_service_key_location' => $service_key . '.txt',
            );

            $this->model_setting_setting->editSetting('feed_ps_indexnow', $data, $store_id);
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

        $json = array();

        if (!$this->user->hasPermission('modify', 'extension/feed/ps_indexnow')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json) {
            $this->load->model('setting/setting');
            $this->load->model('setting/store');

            if (isset($this->request->get['store_id'])) {
                $store_id = (int) $this->request->get['store_id'];
            } else {
                $store_id = 0;
            }

            $service_key = $this->save_service_key();

            if ($service_key) {
                $server = $this->get_store_url($store_id);

                $this->model_setting_setting->editSettingValue('feed_ps_indexnow', 'feed_ps_indexnow_service_key', $service_key, $store_id);
                $this->model_setting_setting->editSettingValue('feed_ps_indexnow', 'feed_ps_indexnow_service_key_location', $service_key . '.txt', $store_id);

                $json['service_key'] = $service_key;
                $json['service_key_location'] = $service_key . '.txt';
                $json['service_key_url'] = $server . $service_key . '.txt';

                $json['success'] = $this->language->get('text_success_generate_service_key');
            } else {
                $json['error'] = $this->language->get('error_generate_service_key');
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function load_sitemap()
    {
        $this->load->language('extension/feed/ps_indexnow');
        $this->load->model('setting/store');

        $json = array();

        if (!$this->user->hasPermission('modify', 'extension/feed/ps_indexnow')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (isset($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }

        if (!$json) {
            if (isset($this->request->files['file'])) {
                $json = $this->load_uploaded_sitemap($this->request->files['file']);
            } else if (isset($this->request->post['file'])) {
                $json = $this->load_url_sitemap($store_id, (string) $this->request->post['file']);
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function load_uploaded_sitemap($file_upload)
    {
        $json = array();

        if (!empty($file_upload['name']) && is_file($file_upload['tmp_name'])) {
            $filename = basename($file_upload['name']);

            if (strtolower(pathinfo($filename, PATHINFO_EXTENSION)) !== 'xml') {
                $json['error'] = $this->language->get('error_filetype');

                return $json;
            }

            if (!in_array($file_upload['type'], ['text/xml', 'application/xml'], true)) {
                $json['error'] = $this->language->get('error_filetype');

                return $json;
            }

            if ((int) $file_upload['error'] !== UPLOAD_ERR_OK) {
                $json['error'] = $this->language->get('error_upload_' . $file_upload['error']);

                return $json;
            }
        } else {
            $json['error'] = $this->language->get('error_upload');

            return $json;
        }

        if (is_readable($file_upload['tmp_name'])) {
            $contents = file_get_contents($file_upload['tmp_name']);

            $json['url_list'] = $this->process_xml_sitemap($contents);

            @unlink($file_upload['tmp_name']);
        } else {
            $json['error'] = $this->language->get('error_upload');
        }

        return $json;
    }

    private function load_url_sitemap($store_id, $file_url)
    {
        $json = array();

        if (!filter_var($file_url, FILTER_VALIDATE_URL)) {
            $json['error'] = $this->language->get('error_invalid_url');

            return $json;
        }

        $file_host = parse_url($file_url, PHP_URL_HOST);

        $server = $this->get_store_url($store_id);
        $server_host = parse_url($server, PHP_URL_HOST);

        if ($file_host !== $server_host) {
            $json['error'] = $this->language->get('error_invalid_url_host');

            return $json;
        }

        $xml_mime_types = array('text/xml', 'application/xml');

        $url_list = array();

        if (function_exists('curl_init')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $file_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

            $response = curl_exec($ch);

            if ($response !== false && !curl_errno($ch)) {
                $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

                if ($content_type && in_array($content_type, $xml_mime_types)) {
                    $url_list = $this->process_xml_sitemap($response);
                }
            }

            curl_close($ch);
        } else if (ini_get('allow_url_fopen')) {
            $context = stream_context_create(array(
                'http' => [
                    'timeout' => 30,
                    'follow_location' => 1,
                    'max_redirects' => 1,
                    'ignore_errors' => true,
                ]
            ));
            $response = @file_get_contents($file_url, false, $context);

            if ($response !== false) {
                $metadata = stream_get_meta_data($context);

                if (isset($metadata['wrapper_data']) && is_array($metadata['wrapper_data'])) {
                    $mime_type = null;

                    foreach ($metadata['wrapper_data'] as $header) {
                        $parts = explode(':', $header, 2);

                        if (count($parts) === 2 && trim($parts[0]) === 'Content-Type') {
                            $mime_type = explode(';', trim($parts[1]))[0];
                            break;
                        }
                    }

                    if ($mime_type && in_array($mime_type, $xml_mime_types)) {
                        $url_list = $this->process_xml_sitemap($response);
                    }
                }
            }
        }

        if ($url_list) {
            $json['url_list'] = $url_list;
        } else {
            $json['error'] = sprintf($this->language->get('error_download'), htmlspecialchars($file_url, ENT_QUOTES, 'UTF-8'));
        }

        return $json;
    }

    private function process_xml_sitemap($xmlString)
    {
        if (empty($xmlString)) {
            return '';
        }

        libxml_use_internal_errors(true);

        $reader = new XMLReader();

        if (!$reader->xml($xmlString)) {
            libxml_clear_errors();

            return '';
        }

        $urls = array();

        while ($reader->read()) {
            if ($reader->nodeType === XMLReader::ELEMENT && $reader->localName === 'url') {
                try {
                    $node = new SimpleXMLElement($reader->readOuterXML());

                    if (isset($node->loc)) {
                        $urls[] = (string) $node->loc;
                    }
                } catch (Exception $e) {

                }

                if (count($urls) >= 50000) {
                    break;
                }
            }
        }

        $reader->close();

        return implode(PHP_EOL, $urls);
    }

    public function remove_queue()
    {
        $this->load->language('extension/feed/ps_indexnow');

        $json = array();

        if (!$this->user->hasPermission('modify', 'extension/feed/ps_indexnow')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (isset($this->request->post['queue_id'])) {
            $queue_id = (int) $this->request->post['queue_id'];
        } else {
            $queue_id = 0;
        }

        $this->load->model('extension/feed/ps_indexnow');

        if ($this->model_extension_feed_ps_indexnow->removeQueue($queue_id)) {
            $json['success'] = $this->language->get('text_success_remove_queue');
        } else {
            $json['error'] = $this->language->get('error_remove_queue');
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

        $queue_total = $this->model_extension_feed_ps_indexnow->getTotalQueue($store_id);

        $pagination = new Pagination();
        $pagination->total = $queue_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        $pagination->url = $this->url->link('extension/feed/ps_indexnow/queue', 'store_id= ' . $store_id . '&user_token=' . $this->session->data['user_token'] . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($queue_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($queue_total - $limit)) ? $queue_total : ((($page - 1) * $limit) + $limit), $queue_total, ceil($queue_total / $limit));

        $this->response->setOutput($this->load->view('extension/feed/ps_indexnow_queue', $data));
    }

    public function submit_queue()
    {
        $this->load->language('extension/feed/ps_indexnow');

        $json = array();

        if (!$this->user->hasPermission('modify', 'extension/feed/ps_indexnow')) {
            $json['error'] = $this->language->get('error_permission');
        }


        $this->load->model('extension/feed/ps_indexnow');
        $this->load->model('setting/setting');
        $this->load->model('setting/store');


        if (isset($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }

        if (isset($this->request->post['queue_id'])) {
            $queue_id = (int) $this->request->post['queue_id'];
        } else {
            $queue_id = 0;
        }

        $server = $this->get_store_url($store_id);
        $server_host = parse_url($server, PHP_URL_HOST);

        if (!$json) {
            if (isset($this->request->post['url_list'])) {
                $url_list = array_filter(array_map('trim', explode("\n", (string) $this->request->post['url_list'])));

                if (empty($url_list)) {
                    $json['error'] = $this->language->get('error_submit_url_list_empty');
                } else {
                    $url_list = array_filter($url_list, function ($url) use ($server_host) {
                        if (!filter_var($url, FILTER_VALIDATE_URL)) {
                            return false;
                        }

                        $url_host = parse_url($url, PHP_URL_HOST);

                        return $url_host && strcasecmp($url_host, $server_host) === 0;
                    });

                    if (empty($url_list)) {
                        $json['error'] = $this->language->get('error_submit_url_list_invalid');
                    }
                }

                $queue_id_list = array();
            } else {
                $filter_data = array(
                    'store_id' => $store_id,
                    'queue_id' => $queue_id,
                    'order' => 'ASC',
                );

                $result = $this->model_extension_feed_ps_indexnow->getQueue($filter_data);

                if ($result) {
                    $url_list = array_column($result, 'url');
                    $queue_id_list = array_column($result, 'queue_id');
                } else {
                    $url_list = array();
                    $queue_id_list = array();
                }

                if (empty($url_list)) {
                    $json['error'] = $this->language->get('error_empty_queue');
                }
            }
        }

        if (!$json) {
            $services = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_status', $store_id);

            $services = json_decode((string) $services, true);

            $services = (json_last_error() === JSON_ERROR_NONE) ? $this->model_extension_feed_ps_indexnow->getServiceEndpoints((array) $services) : array();

            $service_key = (string) $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key', $store_id);
            $service_key_location = (string) $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key_location', $store_id);

            if (!$services) {
                $json['error'] = $this->language->get('error_no_services_enabled');
            }
        }

        if (!$json) {
            foreach ($services as $service) {
                $batches = array_chunk($url_list, 10000);

                foreach ($batches as $batch) {
                    $status_code = $this->submitUrls(
                        $service['endpoint_url'],
                        $server_host,
                        $service_key,
                        $server . $service_key_location,
                        $batch
                    );

                    $log_data = array();

                    foreach ($batch as $batch_url) {
                        $log_data[] = array(
                            'service_id' => $service['service_id'],
                            'url' => $batch_url,
                            'status_code' => (int) $status_code,
                            'store_id' => $store_id,
                        );
                    }

                    $this->model_extension_feed_ps_indexnow->addLog($log_data);

                    sleep(1);
                }
            }

            if ($services && $queue_id_list) {
                $this->model_extension_feed_ps_indexnow->removeQueueItems($queue_id_list);
            }

            $json['success'] = !$queue_id_list ? $this->language->get('text_success_submit_url_list') : $this->language->get('text_success_submit_queue');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function clear_queue()
    {
        $this->load->language('extension/feed/ps_indexnow');

        $json = array();

        if (!$this->user->hasPermission('modify', 'extension/feed/ps_indexnow')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json) {
            $this->load->model('extension/feed/ps_indexnow');

            if (isset($this->request->get['store_id'])) {
                $store_id = (int) $this->request->get['store_id'];
            } else {
                $store_id = 0;
            }

            $this->model_extension_feed_ps_indexnow->clearQueue($store_id);

            $json['success'] = $this->language->get('text_success_clear_queue');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
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

        $queue_total = $this->model_extension_feed_ps_indexnow->getTotalLog($store_id);

        $pagination = new Pagination();
        $pagination->total = $queue_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        $pagination->url = $this->url->link('extension/feed/ps_indexnow/log', 'store_id= ' . $store_id . '&user_token=' . $this->session->data['user_token'] . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($queue_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($queue_total - $limit)) ? $queue_total : ((($page - 1) * $limit) + $limit), $queue_total, ceil($queue_total / $limit));

        $this->response->setOutput($this->load->view('extension/feed/ps_indexnow_log', $data));
    }

    public function clear_log()
    {
        $this->load->language('extension/feed/ps_indexnow');

        $json = array();

        if (!$this->user->hasPermission('modify', 'extension/feed/ps_indexnow')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json) {
            $this->load->model('extension/feed/ps_indexnow');

            if (isset($this->request->get['store_id'])) {
                $store_id = (int) $this->request->get['store_id'];
            } else {
                $store_id = 0;
            }

            $this->model_extension_feed_ps_indexnow->clearLog($store_id);

            $json['success'] = $this->language->get('text_success_clear_log');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function submitUrls($service_endpoint, $host, $service_key, $service_key_location, $url_list)
    {
        $service_endpoint .= '-test';

        $post_data = json_encode(array(
            'host' => $host,
            'key' => $service_key,
            'keyLocation' => $service_key_location,
            'urlList' => $url_list,
        ));

        $headers = array(
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($post_data)
        );

        if (function_exists('curl_init')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $service_endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
            $response = curl_exec($ch);

            if ($response !== false && !curl_errno($ch)) {
                $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            } else {
                $status_code = false;
            }

            curl_close($ch);

            return $status_code;
        } else if (ini_get('allow_url_fopen')) {
            $context = stream_context_create(array(
                'http' => array(
                    'timeout' => 30,
                    'ignore_errors' => true,
                    'header' => $headers,
                    'method' => 'POST',
                    'content' => $post_data
                )
            ));

            $response = @file_get_contents($service_endpoint, false, $context);

            if ($response !== false) {
                $metadata = stream_get_meta_data($context);

                if (isset($metadata['wrapper_data']) && preg_match('#HTTP/\d\.\d (\d+)#', $metadata['wrapper_data'][0], $matches)) {
                    return (int) $matches[1];
                }
            }
        }

        return false;
    }

    private function get_store_url($store_id)
    {
        $server = $this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG;

        if ($store_id > 0 && $store = $this->model_setting_store->getStore($store_id)) {
            $server = $store['url'];
        }

        return $server;
    }

    private function save_service_key()
    {
        if (!is_writable(dirname(DIR_APPLICATION))) {
            return false;
        }

        try {
            $service_key = $this->generateServiceKey();

            $filename = dirname(DIR_APPLICATION) . DIRECTORY_SEPARATOR . $service_key . '.txt';

            $handle = fopen($filename, 'w');

            if ($handle) {
                fwrite($handle, $service_key);

                fclose($handle);

                return $service_key;
            }
        } catch (\Exception $th) {
            return false;
        }
    }

    private function generateServiceKey()
    {
        $length = 32;
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-';
        $charactersLength = strlen($characters);
        $randomKey = '';

        // Preferred: Use random_bytes for secure key generation
        if (function_exists('random_bytes')) {
            try {
                $bytes = random_bytes($length);

                for ($i = 0; $i < $length; $i++) {
                    $randomKey .= $characters[ord($bytes[$i]) % $charactersLength];
                }

                return $randomKey;
            } catch (Exception $e) {
                // Fallback to the next method
            }
        }

        // Fallback: Use openssl_random_pseudo_bytes if random_bytes is unavailable
        if (function_exists('openssl_random_pseudo_bytes')) {
            try {
                $bytes = openssl_random_pseudo_bytes($length);

                for ($i = 0; $i < $length; $i++) {
                    $randomKey .= $characters[ord($bytes[$i]) % $charactersLength];
                }

                return $randomKey;
            } catch (Exception $e) {
                // Fallback to the next method
            }
        }

        // Fallback: Use random_int for cryptographic randomness
        if (function_exists('random_int')) {
            for ($i = 0; $i < $length; $i++) {
                $randomKey .= $characters[random_int(0, $charactersLength - 1)];
            }

            return $randomKey;
        }

        // Last Resort: Use mt_rand (not cryptographically secure)
        for ($i = 0; $i < $length; $i++) {
            $randomKey .= $characters[mt_rand(0, $charactersLength - 1)];
        }

        return $randomKey;
    }
}

