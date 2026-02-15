<?php
class ModelExtensionFeedPsIndexNow extends Model
{
    public function install()
    {
        $this->db->query("
            CREATE TABLE `" . DB_PREFIX . "ps_indexnow_queue` (
                `queue_id` INT NOT NULL AUTO_INCREMENT,
                `url` VARCHAR(255) NOT NULL,
                `content_hash` CHAR(32) NOT NULL,
                `store_id` INT NOT NULL DEFAULT 0,
                `language_id` INT DEFAULT NULL,
                `date_added` DATETIME NOT NULL,
                PRIMARY KEY (`queue_id`),
                UNIQUE KEY `unique_index` (`url`, `content_hash`, `store_id`, `language_id`),
                KEY `date_added_index` (`date_added`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
        ");

        $this->db->query("
            CREATE TABLE `" . DB_PREFIX . "ps_indexnow_services` (
            `service_id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
            `service_name` VARCHAR(255) NOT NULL,
            `endpoint_url` VARCHAR(2083) NOT NULL,
            PRIMARY KEY (`service_id`),
            UNIQUE KEY `service_name_unique` (`service_name`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
        ");

        $this->db->query("
            INSERT INTO `" . DB_PREFIX . "ps_indexnow_services` (`service_id`, `service_name`, `endpoint_url`)
            VALUES
                (1, 'IndexNow (global)', 'https://api.indexnow.org/indexnow'),
                (2, 'Microsoft Bing', 'https://www.bing.com/indexnow'),
                (3, 'Naver', 'https://searchadvisor.naver.com/indexnow'),
                (4, 'Seznam.cz', 'https://search.seznam.cz/indexnow'),
                (5, 'Yandex', 'https://yandex.com/indexnow'),
                (6, 'Yep', 'https://indexnow.yep.com/indexnow');
        ");

        $this->db->query("
            CREATE TABLE `" . DB_PREFIX . "ps_indexnow_logs` (
            `log_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `service_id` SMALLINT UNSIGNED NOT NULL,
            `url` VARCHAR(2083) NOT NULL,
            `status_code` SMALLINT UNSIGNED NOT NULL,
            `store_id` INT NOT NULL DEFAULT 0,
            `date_added` DATETIME NOT NULL,
            PRIMARY KEY (`log_id`),
            KEY `service_id_index` (`service_id`),
            KEY `store_id_index` (`store_id`),
            KEY `date_added_index` (`date_added`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
        ");
    }

    public function uninstall()
    {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "ps_indexnow_queue`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "ps_indexnow_services`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "ps_indexnow_logs`");
    }

    public function getIndexNowServiceList()
    {
        $query = $this->db->query("SELECT `service_id`, `service_name` FROM `" . DB_PREFIX . "ps_indexnow_services`");

        return $query->rows;
    }

    public function getServiceEndpoints($value = 0)
    {
        $query = $this->db->query("SELECT `service_id`, `endpoint_url` FROM `" . DB_PREFIX . "ps_indexnow_services` WHERE `service_id` =  '" . (int) $this->db->escape($value) . "'");

        if ($query->num_rows === 0) {
            return false;
        }

        return $query->row;
    }

    public function addQueue($data = array())
    {
        $this->db->query("
            INSERT IGNORE INTO `" . DB_PREFIX . "ps_indexnow_queue` (`url`, `content_hash`, `store_id`, `language_id`, `date_added`)
            VALUES ('" . $this->db->escape($data['url']) . "', '" . $this->db->escape($data['content_hash']) . "', '" . (int) $data['store_id'] . "', '" . (int) $data['language_id'] . "', NOW())
        ");
    }

    public function removeQueue($queue_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "ps_indexnow_queue` WHERE `queue_id` = '" . (int) $queue_id . "'");

        return $this->db->countAffected();
    }

    public function removeQueueItems($queue_id_list = array())
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "ps_indexnow_queue` WHERE `queue_id` IN (" . implode(',', $queue_id_list) . ")");

        return $this->db->countAffected();
    }

    public function clearQueue($store_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "ps_indexnow_queue` WHERE `store_id` = '" . (int) $store_id . "'");
    }

    public function getQueue($data = array())
    {
        $sql = "SELECT
            `queue_id`,
            `url`,
            `date_added`
        FROM `" . DB_PREFIX . "ps_indexnow_queue`
        WHERE `store_id` = '" . (int) $data['store_id'] . "'";

        if (isset($data['queue_id']) && $data['queue_id'] > 0) {
            $sql .= " AND `queue_id` = '" . (int) $data['queue_id'] . "'";
        }

        $sort_data = array(
            'queue_id',
            'url',
            'store_id',
            'date_added'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY `queue_id`";
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

    public function getTotalQueue($store_id)
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "ps_indexnow_queue` WHERE `store_id` = '" . (int) $store_id . "'");

        return $query->row['total'];
    }

    public function getLog($data = array())
    {
        $sql = "SELECT
            l.`log_id`,
            s.`service_name`,
            l.`url`,
            l.`status_code`,
            l.`date_added`
        FROM `" . DB_PREFIX . "ps_indexnow_logs` l
        LEFT JOIN `" . DB_PREFIX . "ps_indexnow_services` s ON (l.`service_id` = s.`service_id`)
        WHERE (l.`store_id` = '" . (int) $data['store_id'] . "' OR l.`store_id` IS NULL)
        ORDER BY l.`log_id` DESC";

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

    public function getTotalLog($store_id)
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "ps_indexnow_logs` WHERE `store_id` = '" . (int) $store_id . "'");

        return $query->row['total'];
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

    public function clearLog($store_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "ps_indexnow_logs` WHERE `store_id` = '" . (int) $store_id . "'");
    }
}
