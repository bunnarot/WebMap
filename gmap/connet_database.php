<?php

$con = mysqli_connect("localhost","root","" ,"map") or die(mysqli_error());
$cs1 = "SET character_set_results=utf8";
$cs2 = "SET character_set_client = utf8";
$cs3 = "SET character_set_connection = utf8";
@mysqli_query($con,$cs1) or die('Error query: ' . mysqli_error());
@mysqli_query($con,$cs2) or die('Error query: ' . mysqli_error());
@mysqli_query($con,$cs3) or die('Error query: ' . mysqli_error());


?>