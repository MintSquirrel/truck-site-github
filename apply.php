<?php

?>

<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
        <title>Apply</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <style>
		.applynow{
			color: #FFFFFF;
			font-family: calibri;
			border: 10px grey;
			font-size: 75px;
			text-align: center;
			background: #7399D5;
		}


		.topbar a.active{
			background-color: #6EA4CF;
			color:white;
		}

		.apply{
			text-align: center;
			font-size:50px;
			padding-top:100px;
			padding-bottom:100px;
		}

		.appinfo{
			text-align: center;
			font-size:40px;
			padding-top:0px;
			padding-bottom:15px;
			padding-right:200px;
			padding-left:200px;
		}
		</style>
        
    <body>
        <body style="background-color: #d9e0e8">
                <div class="applynow">
                    Apply Now
                </div>
            
                <div class="appinfo">
                    Roadstar Trucking has been serving the DFW area for 20 years. With unmatched customer service, we are dedicated to delivering high quality materials with excellent customer service on every single job.<br>
                    <center><img src="img/dallas.jpg" alt="dallas" style ="width:550px; height:500px; display:block; text-align:center; padding-top:25px">
                    Our drivers are required to have a valid CDL license and all other valid, up-to-date documents in order to drive for Roadstar trucking.
                    <center><img src="img/driver.jpg" alt="driver" style ="width:550px; height:500px; display:block; text-align:center; padding-top:25px">
                    Roadstar Trucking offers the following benefits to all of our hired drivers:<br>
                    <center><img src="img/benefits.jpg" alt="benefits" style ="width:700px; height:600px; display:block; text-align:center;">
                    -one<br>
                    -two<br>
                    -three<br>
                    -etc<br>
                    Fill out our application form with current contact information. An employee will review your application and contact you within 48 hours to update you on the status of your work application
                </div>
                <div class ="apply">
                    <form action="auth" method="POST">
                        <label for="truck model">Truck Model:</label>
                        <input type="text" id="model" name="model"><br><br>
                        <label for="year">Year:</label>
                        <input type="text" id="year" name="year"><br><br>
                        <label for="miles">Miles:</label>
                        <input type="text" id="miles" name="miles"><br><br>
                        <input type="submit" value="Submit">
                    </form>          
                </div>
		    </body>
    </body>

    <?php include('templates/footer.php'); ?>
</html>