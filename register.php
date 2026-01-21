
<?php
    include_once "database.php";

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - IF.Algoritma</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="auth-page">

    <div class="auth-box">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="register">Register</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </div>

</body>
</html>

<?php
    
     
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $passwords = $_POST['password'];
        if ($username == '' or $password == ''){
            //garagara tidak di enkripsi tadi tuh aaaaaaaaaaaaaaaaa jadi gagal
            if (!LoginUser($conn, $username, md5($passwords))) {
                register($conn, $username, $passwords);
                echo '<script> alert("pendaftaran berhasil!"); window.location.href = "login.php";</script>';
                exit();
            } else {
                echo '<script> alert("username sudah digunakan, silahkan gunakan nama yang lain"); window.location.href = "register.php";</script>';
            }
        } else {
            echo "silahkan masukan username/password";
        }
    

    }
    

    


