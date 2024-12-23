<?php
class ModelExtensionFeedPsIndexNow extends Model
{
    public function install()
    {
        $this->db->query("
            CREATE TABLE `" . DB_PREFIX . "ps_indexnow_queue` (
            `queue_id` INT NOT NULL AUTO_INCREMENT,
            `url` VARCHAR(2048) NOT NULL,
            `content_hash` CHAR(32) NOT NULL,
            `store_id` INT NOT NULL DEFAULT 0,
            `language_id` INT DEFAULT NULL,
            `date_added` DATETIME NOT NULL,
            PRIMARY KEY (`queue_id`),
            UNIQUE KEY `url_store_unique` (`url`, `store_id`),
            KEY `content_hash_index` (`content_hash`),
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
            `date_added` DATETIME NOT NULL,
            PRIMARY KEY (`log_id`),
            KEY `service_id_index` (`service_id`),
            KEY `url_index` (`url`),
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

        if ($query->num_rows) {
            return $query->rows;
        }

        return [];
    }

    public function addQueue(array $data): void
    {
        $query = $this->db->query("
            SELECT `date_added`
            FROM `" . DB_PREFIX . "ps_indexnow_queue`
            WHERE `url` = '" . $this->db->escape($data['url']) . "'
            AND `content_hash` = '" . $this->db->escape($data['content_hash']) . "'
            AND `store_id` = '" . (int) $data['store_id'] . "'
            AND `language_id` = '" . (int) $data['language_id'] . "'
            AND `date_added` > DATE_SUB(NOW(), INTERVAL 1 HOUR)
            ORDER BY `date_added` DESC
            LIMIT 1
        ");

        if ($query->num_rows) {
            return;
        }

        $this->db->query("
            INSERT IGNORE INTO `" . DB_PREFIX . "ps_indexnow_queue` (`url`, `content_hash`, `store_id`, `language_id`, `date_added`)
            VALUES ('" . $this->db->escape($data['url']) . "', '" . $this->db->escape($data['content_hash']) . "', '" . (int) $data['store_id'] . "', '" . (int) $data['language_id'] . "', NOW())
        ");
    }


    public function getQueue($data = [])
    {
        $sql = "SELECT
            `queue_id`,
            `url`,
            `date_added`
        FROM `" . DB_PREFIX . "ps_indexnow_queue`";

        if (!empty($data['store_id'])) {
            $sql .= " WHERE `store_id` = '" . (int) $data['store_id'] . "'";
        }

        $sql .= " ORDER BY `date_added` DESC";

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
        LEFT JOIN `" . DB_PREFIX . "ps_indexnow_services` s ON (l.`service_id` = s.`service_id`)";

        if (!empty($data['store_id'])) {
            $sql .= " WHERE l.`store_id` = '" . (int) $data['store_id'] . "'";
        }

        $sql .= " ORDER BY l.`date_added` DESC";

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
}
