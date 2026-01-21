<?php
require_once "database.php";
$anggota = new Anggota();
$data = $anggota->getAll();

session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota - IF.Algoritma</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="main-header">
    <div class="container">
        <div class="logo-container">
            <img src="image/logo.jpg" alt="Logo IF.Algoritma" class="header-logo">
            <span class="site-title">IF.Algoritma</span>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="profil.html">Profil</a></li>
                <li><a href="struktur.html">Struktur</a></li>
                <li><a href="anggota.php" class="active">Anggota</a></li>
                <li><a href="galeri.html">Galeri</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
<section id="daftar-anggota">
<div class="container">
<h2>Daftar Anggota Kelas</h2>

<div class="anggota-grid">

<?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <div class="anggota-card">
        <img src="image/<?= $row['foto'] ?>">
        <h3><?= $row['nama'] ?></h3>
        <h4><?= $row['npm'] ?></h4>
        <blockquote>"<?= $row['quotes'] ?>"</blockquote>

        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id'] ?>"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </div>
<?php endwhile; ?>

    <div class="anggota-tambah">
        <a href="tambah.php">Tambah Anggota</a>
    </div>

</div>
</div>
</section>
</main>

<footer>
    <div class="container">
        <p>&copy;2025 IF.Algoritma. Dibuat dengan HTML, CSS, dan JavaScript.</p>
    </div>
</footer>

<script src="js/script.js"></script>
<div id="up1" onclick="scrollUp()"></div>

</body>
</html>
