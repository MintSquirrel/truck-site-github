<?php

?>

<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
        <title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
            <style>
            .register-form {
                width: 300px;
                margin: 0 auto;
                font-family: Tahoma, Geneva, sans-serif;
            }
            .register-form h1 {
                text-align: center;
                color: #4d4d4d;
                font-size: 24px;
                padding: 20px 0 20px 0;
            }
            .register-form input[type="password"],
            .register-form input[type="text"] {
                width: 100%;
                padding: 15px;
                border: 1px solid #dddddd;
                margin-bottom: 15px;
                box-sizing:border-box;
            }
            .register-form input[type="submit"] {
                width: 100%;
                padding: 15px;
                background-color: #535b63;
                border: 0;
                box-sizing: border-box;
                cursor: pointer;
                font-weight: bold;
                color: #ffffff;
            }
            </style>

    <body>
        <div class="register-form">
			<h1>Registration Form</h1>
			<form action="auth" method="POST">
				<input type="text" name="username" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="password" name="confirm password" placeholder="Confirm Password" required>
				<input type="submit">
			</form>
		</div>
	</body>

    <?php include('templates/footer.php'); ?>
</html>