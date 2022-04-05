<?php

?>
<!--home page of website -->
<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>

        <title>Trucking Website</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <style>
        .welcome{
          color: #FFFFFF;
          font-family: calibri;
          border: 10px grey;
          font-size: 75px;
          text-align: center;
          background: #7399D5;
        }
    </style>
    <body>
    <div class="welcome">
      Welcome
    </div>

    <section id="showcase">
      <h1>Dallas Best Truck transportation company.</h1>
    </section>
    <div class="container">
      <section id="main">
        <h1>Updates</h1>
        <p>Updates will be displayed here.</p>
      </section>

      <aside id="sidebar">
        <h1>Welcome</h1>
        <p>welcome text will be display here.</p>
      </aside>
    </div>
    </body>

    <?php include('templates/footer.php'); ?>
</html>
