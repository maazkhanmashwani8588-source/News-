<?php

include "config.php";

$pid=$_GET["id"];

$sql="select * from post where post_id={$pid}";
$result=mysql_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
unlink("upload/".$row['post_img']);

$sql="delete from post where post_id={$pid}";
if(mysqli_query($conn,$sql)){
	header("location://localhost/news/admin/post.php");
	
}else{
	echo "can not delete";
	
}
mysqli_close($conn);



?>




?>