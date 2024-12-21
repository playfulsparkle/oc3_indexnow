<?php
class ModelExtensionFeedPsIndexNow extends Model
{
    public function install()
    {
        $this->db->query("
            CREATE TABLE `" . DB_PREFIX . "ps_indexnow_queue` (
            `indexnow_id` INT NOT NULL AUTO_INCREMENT,
            `indexnow_service_id` SMALLINT UNSIGNED NOT NULL,
            `url` VARCHAR(2048) NOT NULL,
            `date_added` DATETIME NOT NULL,
            PRIMARY KEY (`indexnow_id`),
            UNIQUE KEY `url_unique_index` (`url`) USING BTREE,
            KEY `date_added_index` (`date_added`),
            KEY `indexnow_service_id_index` (`indexnow_service_id`)
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
            `indexnow_log_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `url` VARCHAR(2048) NOT NULL,
            `status_code` SMALLINT UNSIGNED NOT NULL,
            `date_added` DATETIME NOT NULL,
            PRIMARY KEY (`indexnow_log_id`),
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
}
