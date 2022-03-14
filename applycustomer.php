<?php

?>
<!--apply page for customers to rent a truck -->

<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <style>
        .customer{
  color: #FFFFFF;
  font-family: calibri;
  border: 10px grey;
  font-size: 75px;
  text-align: center;
  background: #7399D5;
}
    </style>
    <body>
    <div class="customer">
      Be our customer
    </div>
        <!--form section for data entry -->
        <form action="">
            <label>Company Name:</label>
            <input type="text"><br><br>
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
            <label>Billing Info:</label>
            <input type="text"><br><br>
            <label>Credit References:</label>
            <input type="text"><br><br>


            <input type="submit" value="Submit">
        </form> 
    </body>

    <?php include('templates/footer.php'); ?>



</html>
