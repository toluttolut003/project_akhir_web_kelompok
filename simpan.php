<?php
require_once "database.php";

$anggota = new Anggota();

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$quotes = $_POST['quotes'];

$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, "image/" . $foto);

$anggota->insert($nama, $npm, $quotes, $foto);

header("Location: anggota.php");
