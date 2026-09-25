<?php
include "config.php";

if(isset($_FILES['fileToUpload'])){
	$errors=array();
	
	$file_name=$_FILES['fileToUpload']['name'];
	$file_size=$_FILES['fileToUpload']['size'];
	$file_tmp=$_FILES['fileToUpload']['tmp_name'];
	$file_type=$_FILES['fileToUpload']['type'];
	

	$file_info=pathinfo($file_name);
	$file_ext=strtolower($file_info['extension']);
	$extension=array("jpeg","jpg","png");
	if(in_array($file_ext,$extension)===false){
		$errors[]="this extension is not allowed. please upload jpg,jpeg, or png files.";
	}
	if($file_size>2097152){
			$errors[]="this size must be less than two mb.";
	
	}if(empty($errors)===true){
		move_uploaded_file($file_tmp,"upload/".$file_name);
	}else{
		print_r($errors);
		die();
	}
}




session_start();
$title=$_POST["post_title"];
$description=$_POST["postdesc"];
$category=$_POST["category"];
$date=DATE("d,M,Y");
//$author=$_POST["post_title"];
$author=$_SESSION["user_id"];


$sql="insert into post(title,description,category,post_date,author,post_img)
values('{$title}','{$description}','{$category}','{$date}','{$author}','{$file_name}')";
$result=mysqli_query($conn,$sql)or die("query failed");
$sql1="update category set post=post+1 where category_id={$category}";
$result1=mysqli_query($conn,$sql1) or die("query failed") ;


if($result){
header("location://localhost/news2/admin/post.php");
}else{

echo "error" .mysqli_error($conn);


}



?>