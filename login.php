<?php

    include_once "database.php";
    session_start();
    $username = "";
    $password = "";
    if (isset($_POST['login'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> 
    <title>Login - IF.Algoritma</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="auth-page">

    <div class="auth-box">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" value="<?php echo $username ?>" placeholder="Username" >
            <input type="password" name="password" value="<?php echo $password?>" placeholder="Password" >
            <button type="submit" name="login">Login</button>
        

<?php 
    //future me, theres already required attribute so i dont think it need additional statement to handle missing condition
    //but i add it anyway
    $err = ""; //
    if (isset($_POST['login'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username == '' or $password == ''){
            $err .= "username/password tidak boleh kosong";
            echo $err;
        } else {
            if (LoginUser($conn, $username, md5($password))) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = md5($password);
                $_SESSION['status'] = LoginUser($conn, $username, md5($password))['status'];
                header("Location: index.php");
                exit();
            } else {
                echo "akun tidak ditemukan";
            }

        }
        
    }

    

?>

    </form>
            <p>Belum punya akun? <a href="register.php">Daftar</a></p>
        </div>
    </body>
    </html>


<?php

//untuk auto increment tidak usah di beri value agar default pada insert query