<?php
include "config.php";


$userid=$_POST["user_id"];
$fname=$_POST["f_name"];
$lname=$_POST["l_name"];
$username=$_POST["username"];
$role=$_POST["role"];

$sql="update user set first_name='{$fname}',last_name='{$lname}',
username='{$username}',role='{$role}' where user_id={$userid}";
$result=mysqli_query($conn,$sql)or die("query failed");
header("location://localhost/news/admin/users.php");

mysqli_close($conn);
		
			



?>
