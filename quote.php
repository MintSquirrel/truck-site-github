<?php

?>
<!--For customers to get a Quote from the company -->
<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>

    <title> Get A Quote </title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
		<style>
		.getquote{
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

		.placeorder{
			text-align: center;
			font-size:50px;
			padding-top:50px;
			padding-bottom:100px;

		}
		
		.quoteinfo{
			text-align: center;
			font-size:40px;
			padding-top:0px;
			padding-right:200px;
			padding-left:200px;
		}
    </style>
    <body>
        <body style="background-color: #d9e0e8">
                

                <div class="getquote">
                    Get A Quote
                </div>
                <div class="quoteinfo">
				Roadstar trucking delivers a wide range of construction materials across the greater DFW area. Materials include but are not limited to: Steel, Brick, Stone, Masonry, Etc. If an uncommon material is needed, include a note when reqauesting a quote.
				<center><img src="img/dirttruck.png" alt="dirttruck" style ="width:700px; height:500px; display:inline-block; text-align:center; padding-top:50px">
                </div>
                <div class ="placeorder">
                    <form action="auth" method="POST">
                        <label for="contact name">Contact Name:</label>
                        <input type="text" id="name" name="name"><br><br>
                        <label for="email">Contact Email:</label>
                        <input type="text" id="email" name="email"><br><br>
                        <label for="material">Requested Material:</label>
                        <input type="text" id="material" name="material"><br><br>
                        <label for="quantity">Quantity (LBs):</label>
                        <input type="text" id="quantity" name="quantity"><br><br>
                        <label for="date">Requested Date:</label>
                        <input type="text" id="date" name="date"><br><br>
                        <label for="note">Additional Notes:</label>
                        <input type="text" id="note" name="note"><br><br>
                        <input type="submit" value="Submit">
                    </form>         
                </div>
    </body>

    <?php include('templates/footer.php'); ?>
</html>
