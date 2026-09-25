<?php
include "config.php";

if(empty($_FILES['new-image']['name'])){
$file_name=$_POST['old_image'];	
}else{
	$errors=array();
	$file_name=$_FILES['new-image']['name'];
	$file_size=$_FILES['new-image']['size'];
	$file_tmp=$_FILES['new-image']['tmp_name'];
	$file_type=$_FILES['new-image']['type'];
	
	
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

 $sql="update post set title='{$_POST["post_title"]}',description='{$_POST["postdesc"]}',
category={$_POST["category"]},post_img='{$file_name}'
where post_id={$_POST["post_id"]}";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:http://localhost/news2/admin/post.php");
}else{
	echo "result can not found".mysqli_error($conn);
}

?>