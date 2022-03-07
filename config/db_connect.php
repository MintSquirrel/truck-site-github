<?php

   //connect to database
   $conn = mysqli_connect('localhost', 'bluejjay', 'roadrunners', 'users_tc' );

   //check connection
   if(!$conn){
     //backup user account
       $conn = mysqli_connect('localhost', 'testadmin','roadrunners','users_tc');

       if(!$conn){
           echo 'Connection error: ' . mysqli_connect_error();

       }

   }

?>
