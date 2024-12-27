<?php
class ModelExtensionFeedPsIndexNow extends Model
{
    public function getQueue($data = array())
    {
        $sql = "SELECT `queue_id`, `url`, `date_added` FROM `" . DB_PREFIX . "ps_indexnow_queue` WHERE `store_id` = '" . (int) $data['store_id'] . "'";

        $sort_data = array(
            'queue_id',
            'url',
            'store_id',
            'date_added'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY `date_added`";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC' || $data['order'] == 'ASC')) {
            $sql .= " " . $data['order'];
        } else {
            $sql .= " DESC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int) $data['start'] . "," . (int) $data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function removeQueueItems($queue_id_list)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "ps_indexnow_queue` WHERE `queue_id` IN (" . implode(',', $queue_id_list) . ")");

        return $this->db->countAffected();
    }

    public function getServiceEndpoints($services)
    {
        $services = array_filter($services, function ($value): bool {
            return $value > 0;
        });

        if (empty($services)) {
            return array();
        }

        $query = $this->db->query("SELECT `service_id`, `endpoint_url` FROM `" . DB_PREFIX . "ps_indexnow_services` WHERE `service_id` IN (" . implode(',', array_keys($services)) . ")");

        return $query->rows;
    }

    public function addLog($log_data = array())
    {
        if (empty($log_data)) {
            return;
        }

        $values = array();

        foreach ($log_data as $data) {
            $values[] = "(
                '" . (int) $data['service_id'] . "',
                '" . $this->db->escape($data['url']) . "',
                '" . (int) $data['status_code'] . "',
                '" . (int) $data['store_id'] . "',
                NOW()
            )";
        }

        $this->db->query("INSERT INTO `" . DB_PREFIX . "ps_indexnow_logs` (`service_id`, `url`, `status_code`, `store_id`, `date_added`) VALUES " . implode(", ", $values));
    }
}
