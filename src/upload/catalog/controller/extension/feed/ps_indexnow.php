<?php
class ControllerExtensionFeedPsIndexNow extends Controller
{
    public function index()
    {
        $this->load->model('extension/feed/ps_indexnow');
        $this->load->model('setting/setting');
        $this->load->model('setting/store');

        $default_store = array('store_id' => 0, 'url' => $this->config->get('config_url'), 'ssl' => $this->config->get('config_ssl'));

        $stores = array_merge(array($default_store), $this->model_setting_store->getStores());

        foreach ($stores as $store) {
            try {
                $this->submit_url($store);
            } catch (\Exception $exception) {
                $this->log->write($exception->getMessage());
            }
        }
    }

    private function submit_url($store)
    {
        if (!$this->model_setting_setting->getSettingValue('feed_ps_indexnow_status', $store['store_id'])) {
            $this->log->write('Playful Sparkle - IndexNow: Extension not enabled for store ID "' . $store['store_id'] . '"');

            return;
        }


        $serviceId = (int) $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service', $store['store_id']);

        $service = $this->model_extension_feed_ps_indexnow->getServiceEndpoints($serviceId);

        $service_key = (string) $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key', $store['store_id']);
        $service_key_location = (string) $this->model_setting_setting->getSettingValue('feed_ps_indexnow_service_key_location', $store['store_id']);

        if (empty($services)) {
            $this->log->write('Playful Sparkle - IndexNow: No IndexNow service is configured for store ID "' . $store['store_id'] . '"');

            return;
        }


        $server = ($this->request->server['HTTPS'] && !empty($store['ssl'])) ? $store['ssl'] : $store['url'];
        $server_host = parse_url($server, PHP_URL_HOST);


        $filter_data = array(
            'store_id' => $store['store_id'],
            'order' => 'ASC',
        );

        $result = $this->model_extension_feed_ps_indexnow->getQueue($filter_data);

        $url_list = $result ? array_column($result, 'url') : array();


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
                    'store_id' => $store['store_id'],
                );
            }

            $this->model_extension_feed_ps_indexnow->addLog($log_data);
        }

        if ($result && $services) {
            if ($queue_id_list = array_column($result, 'queue_id')) {
                $this->model_extension_ps_indexnow_feed_ps_indexnow->removeQueueItems($queue_id_list);
            }
        }
    }

    private function submitUrls($service_endpoint, $host, $service_key, $service_key_location, $url_list)
    {
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
            if (
                defined('CURLSSLOPT_NATIVE_CA')
                && version_compare(curl_version()['version'], '7.71', '>=')
            ) {
                curl_setopt($ch, CURLOPT_SSL_OPTIONS, CURLSSLOPT_NATIVE_CA);
            }
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
            $response = curl_exec($ch);

            if ($response !== false && !curl_errno($ch)) {
                $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            } else {
                $status_code = false;
            }

            if ($ch && PHP_VERSION_ID < 80500) {
                curl_close($ch);
            }

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
}
