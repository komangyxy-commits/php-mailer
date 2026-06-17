<?php
require_once 'config/database.php';

class Peserta extends database {
    private $table = 'peserta';

    public function create($nama, $email, $asal) {
        $qry = "INSERT INTO $this->table (nama, email, asal) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("sss", $nama, $email, $asal);
        return $stmt->execute();
    }
}
?>