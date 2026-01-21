<?php
require_once "database.php";
$anggota = new Anggota();

$anggota->delete($_GET['id']);
header("Location: anggota.php");
