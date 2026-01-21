<?php

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","anggota");

class Database {
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "anggota");
        if ($this->conn->connect_error)
        {
            echo "Koneksi gagal" . $this->conn->connect_error;
        }
    }
}
