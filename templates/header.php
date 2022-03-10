<?php
    session_start();
?>

<head>
    <title>Roadrunners</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="index.php" class="btn brand z-depth-0">Home</a></li>
                <li><a href="#" class="btn brand z-depth-0">Customers</a></li>
                <li><a href="aboutus.php" class="btn brand z-depth-0">About Us</a></li>
                <li><a href="quote.php" class="btn brand z-depth-0">Quote</a></li>
                <li><a href="contact.php" class="btn brand z-depth-0">Contact</a></li>
                <li><a href="apply.php" class="btn brand z-depth-0">Apply</a></li>
                <li><a href="privacypolicy.php" class="btn brand z-depth-0">Privacy Policy</a></li>
                <?php
                    if(isset($_SESSION["username"])){
                        echo "<li><a href='profile.php' class='btn brand z-depth-0'>Profile</a></li>";
                        echo "<li><a href='config/logout-run.php' class='btn brand z-depth-0'>Log out</a></li>";
                        echo "<li>Hello {$_SESSION["username"]}, This is a {$_SESSION["account"]} account!</li>";
                    }
                    else{
                        echo "<li><a href='register.php' class='btn brand z-depth-0'>Register</a></li>";
                        echo "<li><a href='login.php' class='btn brand z-depth-0'>Login</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>
