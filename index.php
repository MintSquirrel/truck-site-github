<?php

?>
<!--home page of website -->
<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>

        <title>Trucking Website</title>

    </head>

    <body>
    <style>
      .container{
            color: #fff;
            background-color: coral;
            font-family: calibri;
            text-align: center;
            border: 10px grey;
            font-size: 50px;
            
        }
        
        .column {
          float: left;
          width: 33.33%;
          padding: 5px;
          image-rendering: auto;
          image-rendering: crisp-edges;
          image-rendering: smooth;
        }

        .row::after {
          content: "";
          clear: both;
          display: table;
        }

        .cont {
          width: 80%;
          margin: auto;
          overflow: hidden;
        }

        .main {
          background-color: #fff;
          float: left;
          width: 70%;
          padding: 0 30px;
          box-sizing: border-box;
        }

        .sidebar {
          float: right;
          width: 30%;
          background: #333;
          color: #fff;
          padding: 10px;
          box-sizing: border-box;
        }

    </style>

    <body>
    <header id="main-header">
          <div class="container">
              ★ Roadstar
          </div>
      </header>
    </div>

    <section id="cont">
      <h1>Dallas Best Truck Transportation Company.</h1>
    </section>
      
    <div class="row">
      <div class="column">
        <img src="img/construction.jpg" alt="Construction" style="width:100%"/>
      </div>
      <div class="column">
        <img src="img/demolition.jpg" alt="Demolition" style="width:100%"/>
      </div>
      <div class="column">
        <img src="img/truckwithdirt.jpg" alt="Truckwithdirt" style="width:100%"/>
      </div>
    </div>
      

    

    <div class="cont">
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

    <?php include('templates/scripts.php'); ?>
</html>
