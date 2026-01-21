<?php
require_once "database.php";
$anggota = new Anggota();

$data = $anggota->getById($_GET['id']);

if (isset($_POST['update'])) {
    $anggota->update($_GET['id'], $_POST['nama'], $_POST['npm'], $_POST['quotes'], $_POST['foto']);
    header("Location: anggota.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>

    <h2>Edit Data Anggota</h2>
    
    <form method="post">
    <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
    <input type="text" name="npm" value="<?= $data['npm'] ?>" required>
    <input type="text" name="quotes" value="<?= $data['quotes'] ?>" required>
    <input type="file" name="foto" value="<?= $data['foto'] ?>" required>
    <button type="submit" name="update">Update</button>
</form>

</body>
</html>