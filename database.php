<?php
require_once "connection.php";

class Anggota extends Database {
    public function getAll(){
        $query = "SELECT * FROM anggota";
        return $this->conn->query($query);
    }

    public function insert($nama, $npm, $quotes, $foto){
        $sql = "INSERT INTO anggota VALUES (NULL, '$nama', '$npm', '$quotes', '$foto')";
        return $this->conn->query($sql);
    }

    public function getById($id) {
        return $this->conn->query("SELECT * FROM anggota WHERE id=$id")->fetch_assoc();
    }

    public function update($id, $nama, $npm, $quotes, $foto) {
        $sql = "UPDATE anggota SET nama='$nama', npm='$npm', quotes='$quotes', foto='$foto' WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM anggota WHERE id=$id");
    }
}