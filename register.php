
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
    $password = $_POST['password'];
    if (!empty($username) and !empty($password)){
        
        register($conn, $username, $password);
        echo '<script> alert("pendaftaran berhasil!"); window.location.href = "login.php";</script>';
        exit();
    } else {
        echo "silahkan masukan username/password";
    }
    

    }
    

    


