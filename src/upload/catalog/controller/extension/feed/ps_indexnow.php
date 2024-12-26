<?php
class ControllerExtensionFeedPsIndexNow extends Controller
{
    public function index()
    {
        $this->load->model('extension/feed/ps_indexnow');
        $this->load->model('setting/setting');
        $this->load->model('setting/store');

        if ($this->request->server['HTTPS']) {
            $server = $this->config->get('config_ssl');
        } else {
            $server = $this->config->get('config_url');
        }

        $stores = array_merge(
            array(array('store_id' => 0, 'url' => $server)),
            $this->model_setting_store->getStores(),
        );

        foreach ($stores as $store) {
            $this->submit_url($store);
        }
    }

    public function submit_url($store)
    {
        $server = $store['url'];
        $server_host = parse_url($server, PHP_URL_HOST);

        if ($store['store_id'] > 0) {
            $server = $store['url'];
            $server_host = parse_url($server, PHP_URL_HOST);
        }

        $filter_data = array(
            'store_id' => $store['store_id'],
            'order' => 'ASC',
        );

        $result = $this->model_extension_feed_ps_indexnow->getQueue($filter_data);

        $url_list = $result ? array_column($result, 'url') : array();

        $services = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_status', $store['store_id']);

        $services = json_decode((string) $services, true);

        $services = (json_last_error() === JSON_ERROR_NONE) ? $this->model_extension_feed_ps_indexnow->getServiceEndpoints((array) $services) : array();

        $service_key = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key', $store['store_id']);
        $service_key_location = $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key_location', $store['store_id']);

        $all_success = true;

        foreach ($services as $service) {
            $batches = array_chunk($url_list, 10000);

            foreach ($batches as $batch) {
                $url_list_results = $this->submitUrls(
                    $service['endpoint_url'] . 'no',
                    $server_host,
                    $service_key,
                    $server . $service_key_location,
                    $batch
                );

                $log_data = array();

                foreach ($url_list_results as $url_list_result) {
                    $log_data[] = array(
                        'service_id' => $service['service_id'],
                        'url' => $url_list_result['url'],
                        'status_code' => $url_list_result['status_code'],
                        'store_id' => $store['store_id'],
                    );

                    if ($all_success && $url_list_result['status_code'] !== 200) {
                        $all_success = false;
                    }
                }

                $this->model_extension_feed_ps_indexnow->addLog($log_data);

                // Add a delay between batches to avoid overwhelming the service
                sleep(2); // Delay for 2 second
            }
        }

        if ($result && $services) {
            if ($queue_id_list = array_column($result, 'queue_id')) {
                $this->model_extension_ps_indexnow_feed_ps_indexnow->removeQueueItems($queue_id_list);
            }
        }
    }

    private function submitUrls($service_endpoint, $host, $service_key, $service_key_location, $url_list)
    {
        $result = array();

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
                $status_code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);

                foreach ($url_list as $url) {
                    $result[] = array(
                        'url' => $url,
                        'status_code' => $status_code,
                    );
                }
            }

            curl_close($ch);
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
                    foreach ($url_list as $url) {
                        $result[] = array(
                            'url' => $url,
                            'status_code' => (int) $matches[1],
                        );
                    }
                }
            }
        }

        return $result;
    }
}
