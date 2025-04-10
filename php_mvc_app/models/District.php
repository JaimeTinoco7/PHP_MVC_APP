<?php
class District extends Model {
    protected $table = 'districts';

    public function getAll() {
        return $this->db->query("SELECT * FROM districts")->fetchAll();
    }
}
