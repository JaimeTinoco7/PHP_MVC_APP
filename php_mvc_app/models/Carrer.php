<?php

Class Carrer extends Model {
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM carrers");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
