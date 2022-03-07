<?php

// Connection to database
include('config/db_connect.php');

// Setting up variables to send to SQL
$fname = $lname = '';
$errors = array('miles' => '', 'year' => '', 'model' => '');

//No error checking yet
// Some minor error checking (Unfinished)
if(isset($_POST['submit'])){

  if(empty($_POST['model'])){

  } else {

  }

  if(empty($_POST['model'])){

  } else {

  }

  if(empty($_POST['model'])){

  } else {

  }

}

?>


<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <style>
        .contractor{
            color: #FFFFFF;
            font-family: calibri;
            border: 10px grey;
            font-size: 75px;
            text-align: center;
            background: #7399D5;
        }
    </style>
    <body>
        <div class="contractor">
            Be our contractor
        </div>
        <form action="">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <label>Address:</label>
            <input type="text"><br><br>
            <label>City:</label>
            <input type="text"><br><br>
            <label>State:</label>
            <input type="text"><br><br>
            <label>Zip Code:</label>
            <input type="text"><br><br>
            <label>Phone Number:</label>
            <input type="text"><br><br>
            <label>Email Address:</label>
            <input type="text"><br><br>
            <label>Driver's License Number:</label>
            <input type="text"><br><br>
            <label>Social Security Number/Proof EIN Number:</label>
            <input type="text"><br><br>

            <input type="submit" value="Submit">
        </form>
    </body>

    <?php include('templates/footer.php'); ?>



</html>
