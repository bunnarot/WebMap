<?php
include 'connet_database.php';

//$sql = "INSERT INTO tbl_location(id,addloca) ";
$sql = "INSERT INTO street(id, name,description,coord,type) ";
$sql .= " VALUES('','','','".$_POST["addstreet"]."','1') ";
//$sql .= " VALUES('','".$_POST["add"]."') ";
echo $sql;
mysqli_query($con,$sql);


//$sql = "INSERT INTO des(id,des,lname) ";
//$sql .= " VALUES('','".$_POST["des"]."', '".$_POST["des"]."', '".$_POST["name"]."') ";
//echo $sql;
//mysql_query($sql);

?>