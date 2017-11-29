<?php


$con = mysqli_connect("localhost","root","","db_gmap") or die(mysqli_error());
$cs1 = "SET character_set_results=utf8"; 
$cs2 = "SET character_set_client = utf8"; 
$cs3 = "SET character_set_connection = utf8"; 
@mysqli_query($con,$cs1) or die('Error query: ' . mysqli_error()); 
@mysqli_query($con,$cs2) or die('Error query: ' . mysqli_error()); 
@mysqli_query($con,$cs3) or die('Error query: ' . mysqli_error()); 


$sql = "INSERT INTO tbl_location(id,addloca) ";
$sql .= " VALUES('','".$_POST["add"]."') ";
echo $sql;
mysqli_query($con,$sql);


//$sql = "INSERT INTO des(id,des,lname) ";
//$sql .= " VALUES('','".$_POST["des"]."', '".$_POST["des"]."', '".$_POST["name"]."') ";
//echo $sql;
//mysql_query($sql);

?>