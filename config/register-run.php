<?php
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $pwd = $_POST['password'];
        $pwd_confirm = $_POST['passwordconfirm'];

        require_once 'db.php';
        require_once 'func.php';

        if(pwdMatch($pwd, $pwd_confirm) !== false){
            header("Location: ../register.php?error=pwdMatch");
            exit();
        }
        if(checkName($conn, $name) !== false){
            header("Location: ../register.php?error=nameTaken");
            exit();
        }

        registerUser($conn, $name, $pwd);
    }
    else{
        header("Location: ../register.php");
        exit();
    }
?>