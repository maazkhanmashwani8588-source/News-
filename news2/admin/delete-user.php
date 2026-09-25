<?php
include "config.php";

$userid=$_GET["id"];

$sql="delete from user where user_id={$userid}";
if(mysqli_query($conn,$sql)){
	header("location://localhost/news/admin/users.php");
	
}else{
	echo "can not delete";
	
}
mysqli_close($conn);



?>