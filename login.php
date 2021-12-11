<?php

?>

<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
        <title>Login Form</title>
		<style>
		.login-form {
			width: 300px;
			margin: 0 auto;
			font-family: Tahoma, Geneva, sans-serif;
		}
		.login-form h1 {
			text-align: center;
			color: #4d4d4d;
			font-size: 24px;
			padding: 20px 0 20px 0;
		}
		.login-form input[type="password"],
		.login-form input[type="text"] {
			width: 100%;
			padding: 15px;
			border: 1px solid #dddddd;
			margin-bottom: 15px;
			box-sizing:border-box;
		}
		.login-form input[type="submit"] {
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
        <div class="login-form">
                <h1>Login Form</h1>
                <form action="auth" method="POST">
                    <input type="text" name="username" placeholder="Username" required value="<?php echo htmlspecialchars($username) ?>">
                    <input type="password" name="password" placeholder="Password" required value="<?php echo htmlspecialchars($password) >
                    <input type="submit" value="Submit" >
                </form>
            </div>
    </body>

    <?php include('templates/footer.php'); ?>
</html>
