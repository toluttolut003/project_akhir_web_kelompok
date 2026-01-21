<?php
require_once "database.php";
$anggota = new Anggota();

if (isset($_POST['simpan'])) {
    $anggota->insert($_POST['nama'], $_POST['npm'], $_POST['quotes'], $_POST['foto']);
    header("Location: anggota.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <link rel="stylesheet" href="css/tambah.css">
</head>
<body>
    <h2>Tambah Data Anggota</h2>

    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="nama" required>
        <input type="text" name="npm" placeholder="npm" required>
        <input type="text" name="quotes" placeholder="quotes" required>
        <input type="file" name="foto" placeholder="foto" required>
        <button type="submit">Simpan</button>
    </form>

</body>
</html>