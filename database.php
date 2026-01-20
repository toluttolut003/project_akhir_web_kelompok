
<?php

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