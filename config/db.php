<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "truck_site";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}