<?php

   //connect to database
   $conn = mysqli_connect('localhost', 'minty','minty','tutorial');

   //check connection
   if(!$conn){
       echo 'Connection error: ' . mysqli_connect_error();
   }

?>
