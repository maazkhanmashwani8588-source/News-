<?php
include "config.php";

$cid=$_POST["cat_id"];
$cname=$_POST["cat_name"];



$sql="update category set category_name='{$cname}' where category_id='{$cid}'";
$result=mysqli_query($conn,$sql)or die("query failed".mysqli_error($conn));
header("location://localhost/news/admin/category.php");

mysqli_close($conn);



?>