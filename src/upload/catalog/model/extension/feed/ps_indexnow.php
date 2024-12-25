<?php
class ModelExtensionFeedPsIndexNow extends Model
{
    public function getQueue(array $data = array())
    {
        $sql = "SELECT `queue_id`, `url`, `date_added` FROM `" . DB_PREFIX . "ps_indexnow_queue`";

        $sort_data = array(
            'queue_id',
            'url',
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
}
