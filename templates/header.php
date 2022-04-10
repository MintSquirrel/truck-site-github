<?php
    session_start();
?>
// title of the homepage
<head>
    <title>Roadrunners</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css" href="css/style.css">
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
                <li><a href="applycustomer.php" class="btn brand z-depth-0">Customers</a></li>
                <li><a href="applycontractor.php" class="btn brand z-depth-0">Contractor</a></li>
                <li><a href="aboutus.php" class="btn brand z-depth-0">About Us</a></li>
                <li><a href="privacypolicy.php" class="btn brand z-depth-0">Privacy Policy</a></li>
                <?php
                    if(isset($_SESSION["username"])){
                        echo "<li><a href='profile.php' class='btn brand z-depth-0'>Profile</a></li>";
                        if($_SESSION["account"] === "Admin"){
                            echo "<li><a href='admin_db.php' class='btn brand z-depth-0'>View Data</a></li>";
                            echo "<li><a href='admin_create.php' class='btn brand z-depth-0'>Create Account</a></li>";
                        }
                        echo "<li><a href='config/logout-run.php' class='btn brand z-depth-0'>Log out</a></li>";
                    }
                    else{
                        echo "<li><a href='register.php' class='btn brand z-depth-0'>Register</a></li>";
                        echo "<li><a href='login.php' class='btn brand z-depth-0'>Login</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>

      <header id="main-header">
          <div class="container">
              <h1>Roadstar</h1>
          </div>
      </header>
    </div>
