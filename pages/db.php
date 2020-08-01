<?php

$servername = "sql300.epizy.com";
$username = "epiz_26384478";
$password = "WhZblU0huZNCQb";
$db = "epiz_26384478_ecommerce";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>