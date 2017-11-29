<?php
include 'connet_database.php';


$sql = "INSERT INTO village(id, name,coord,type) ";
$sql .= " VALUES('','หมู่บ้าน','".$_POST["addvillage"]."','0') ";

//INSERT INTO `village`(`id`, `name`, `coord`, `type`, `img_vi`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])

echo $sql;
mysqli_query($con,$sql);


?>