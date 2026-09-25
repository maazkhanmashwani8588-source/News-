<?php

include "config.php";

$cid=$_GET["id"];

$sql="delete from category where category_id={$cid}";
if(mysqli_query($conn,$sql)){
	header("location://localhost/news/admin/category.php");
	
}else{
	echo "can not delete";
	
}
mysqli_close($conn);



?>