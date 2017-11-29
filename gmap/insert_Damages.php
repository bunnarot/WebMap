<?php

include 'connet_database.php';

$sql = "INSERT INTO damages(id,description,attach,reportDate,staus,coord,reportBy) ";
$sql .= " VALUES('','สถานที่','img','','0','".$_POST["adddamages"]."','Call') ";

echo $sql;
mysqli_query($con,$sql);

//INSERT INTO `damages`(`id`, `description`, `attach`, `reportDate`, `staus`, `coord`, `reportBy`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])

?>