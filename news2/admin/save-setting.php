<?php 


include "config.php";
if(empty($_FILES['logo']['name'])){
	$file_name=$_POST['old_logo'];
	
}else{
$errors=array();
	$file_name=$_FILES['logo']['name'];
	$file_size=$_FILES['logo']['size'];
	$file_tmp=$_FILES['logo']['tmp_name'];
	$file_type=$_FILES['logo']['type'];
   $file_info = pathinfo($file_name);
    $file_ext = strtolower($file_info['extension']);
	
	 $extension=array("jpeg","jpg","png");
    if(in_array($file_ext,$extension)===false){
        $errors[]="This extension is not allowed. Please upload jpg, jpeg, or png files.";
    }
    if($file_size>2097152){
        $errors[]="File size must be less than 2mb";
    }
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"images/".$file_name);
    } else {
        print_r($errors);
        die();
    }



	
	
}
 $sql="update settings set websitename='{$_POST["website_name"]}',logo='{$file_name}',
footerdesc='{$_POST["footer_desc"]}'"; 
$result=mysqli_query($conn,$sql);

if($result){
header("location://localhost/news/admin/setting.php");
}else
{
	echo "Query Failed". mysqli_error($conn);
}

 ?>