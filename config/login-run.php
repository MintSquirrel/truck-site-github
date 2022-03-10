<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $pwd = $_POST["password"];
        $acc = $_POST["account"];

        require_once 'db.php';
        require_once 'func.php';

        loginUser($conn, $username, $pwd, $acc);
    }
    else{
        header("Location: ../login.php?error=didntwork");
        exit();
    }
?>