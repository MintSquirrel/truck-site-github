<?php

    // Code inspired by Dani Krossings' php tutorial on php, databases, and starting a login system
    // https://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing

    function pwdMatch($pwd, $pwd_confirm){
        $result;
        if($pwd !== $pwd_confirm){
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }

    function checkName($conn, $name, $acc){
        if($acc === "employee"){
            $sql = "SELECT * FROM employees WHERE emp_uid = ?;";
        }
        else{
            $sql = "SELECT * FROM users WHERE user_uid = ?;";
        }

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../register.php?register=stmtFailed");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "s", $name);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($result)){
            return $row;
        }
        else{
            return false;
        }

        mysqli_stmt_close($stmt);
    }

    function registerUser($conn, $name, $pwd, $acc){
        if($acc === "employee"){
            $sql = "INSERT INTO employees (emp_uid, emp_pwd) VALUES (?, ?)";
        }
        else{
            $sql = "INSERT INTO users (user_uid, user_pwd) VALUES (?, ?)";
        }
        
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../register.php?register=stmtFailed");
            exit();
        }

        $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
        
        mysqli_stmt_bind_param($stmt, "ss", $name, $pwdHash);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: ../register.php?error=none");
        exit();
    }

    function loginUser($conn, $name, $pwd, $acc){
        $user = checkName($conn, $name, $acc);

        if($user === false){
            header("Location: ../login.php?error=wronglogin");
            exit();
        }

        if($acc === "employee"){
            $pwdHash = $user["emp_pwd"];
        }
        else{
            $pwdHash = $user["user_pwd"];
        }

        $passwordCheck = password_verify($pwd, $pwdHash);

        if($passwordCheck === false){
            header("Location: ../login.php?error=wronglogin");
        }
        else{
            if($acc === "employee"){
                session_start();
                $_SESSION["userid"] = $user["id"];
                $_SESSION["username"] = $user["emp_uid"];
                $_SESSION["account"] = $acc;

                header("Location: ../index.php");
                exit();
            }
            else{
                session_start();
                $_SESSION["userid"] = $user["id"];
                $_SESSION["username"] = $user["user_uid"];
                $_SESSION["account"] = $acc;

                header("Location: ../index.php");
                exit();
            }
        }
    }
?>
