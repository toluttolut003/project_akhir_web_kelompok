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

///////////
}


    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "kelas";

    $conn = "";

    try {
        $conn = mysqli_connect($server,$user,$password, $db);
    } catch (mysqli_sql_exception) {
      die('<h1 style="color : red;"> WARNING, DB CONNECTION LOST</h1>');
    }

    function register($conn, $usernames, $passwords){
        $reg = "INSERT INTO `session` (`id`, `username`, `password`, `status`) VALUES (NULL, '$usernames', MD5('$passwords'), 'user');";
        $conn->query($reg);
    }

    function LoginUser($conn, $username, $password){
        $sql = "SELECT * FROM `session` WHERE username = '$username' AND `password` = '$password' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    } //harusnya di beri nama fetch function or smth

    