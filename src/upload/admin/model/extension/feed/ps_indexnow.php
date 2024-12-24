<?php
class ModelExtensionFeedPsIndexNow extends Model
{
    public function install()
    {
        $this->db->query("
            CREATE TABLE `" . DB_PREFIX . "ps_indexnow_queue` (
            `queue_id` INT NOT NULL AUTO_INCREMENT,
            `url` VARCHAR(2048) NOT NULL,
            `content_hash` CHAR(34) NOT NULL,
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
            `endpoint_url` VARCHAR(2048) NOT NULL,
            PRIMARY KEY (`service_id`),
            UNIQUE KEY `service_name_unique` (`service_name`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
        ");

        $this->db->query("
            INSERT INTO `" . DB_PREFIX . "ps_indexnow_services` (`service_name`, `endpoint_url`)
            VALUES
                ('Microsoft Bing', 'https://www.bing.com/indexnow'),
                ('Naver', 'https://searchadvisor.naver.com/indexnow'),
                ('Seznam.cz', 'https://search.seznam.cz/indexnow'),
                ('Yandex', 'https://yandex.com/indexnow'),
                ('Yep', 'https://indexnow.yep.com/indexnow'),
                ('Internet Archive', 'https://web-static.archive.org/indexnow');
        ");

        $this->db->query("
            CREATE TABLE `" . DB_PREFIX . "ps_indexnow_logs` (
            `log_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `service_id` SMALLINT UNSIGNED NOT NULL,
            `url` VARCHAR(2048) NOT NULL,
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

    public function addQueue($data)
    {
        $this->db->query("
            INSERT IGNORE INTO `" . DB_PREFIX . "ps_indexnow_queue` (`url`, `content_hash`, `store_id`, `language_id`, `date_added`)
            VALUES ('" . $this->db->escape($data['url']) . "', '" . $this->db->escape($data['content_hash']) . "', '" . (int)$data['store_id'] . "', '" . (int)$data['language_id'] . "', NOW())
        ");
    }

    public function removeQueue($queue_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "ps_indexnow_queue` WHERE `queue_id` = '" . (int) $queue_id . "'");

        return $this->db->countAffected();
    }

    public function clearQueue()
    {
        $this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "ps_indexnow_queue`");

        return $this->db->countAffected();
    }

    public function getQueue($data = [])
    {
        $sql = "SELECT
            `queue_id`,
            `url`,
            `date_added`
        FROM `" . DB_PREFIX . "ps_indexnow_queue`
        WHERE `store_id` = '" . (int) $data['store_id'] . "'
        ORDER BY `date_added` DESC";

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

    public function getQueuedUrls($limit = 100)
    {
        $query = $this->db->query("SELECT `queue_id`, `url`, `store_id` FROM `" . DB_PREFIX . "ps_indexnow_queue` ORDER BY `date_added` ASC LIMIT " . (int) $limit);

        return $query->rows;
    }

    public function getTotalQueue()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "ps_indexnow_queue`");

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
        WHERE l.`store_id` = '" . (int) $data['store_id'] . "'
        ORDER BY l.`date_added` DESC";

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

    public function getTotalLog()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "ps_indexnow_logs`");

        return $query->row['total'];
    }

    public function addLog(array $data): void
    {
        $this->db->query("
            INSERT INTO `" . DB_PREFIX . "ps_indexnow_logs` (`service_id`, `url`, `status_code`, `store_id`, `date_added`)
            VALUES ('" . (int) $data['service_id'] . "', '" . $this->db->escape($data['url']) . "', '" . (int) $data['status_code'] . "', '" . (int) $data['store_id'] . "', NOW())
        ");
    }

    public function clearLog()
    {
        $this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "ps_indexnow_logs`");

        return $this->db->countAffected();
    }
}
