<?php
session_start();
include "class.DbConnect.php";
$Db_obj=new Db_Connect();
date_default_timezone_set("Asia/Kolkata");
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'images/testimonial/'; // upload directory
$name = $_POST['name_t'];
$current_date_time=date("Y-m-d")." ".date("h:i:s");
if(isset($_FILES['image']))
{
	$img = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
		
	// get uploaded file's extension
	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
	
	// can upload same image using rand function
	$final_image = $name.$current_date_time.$img;
	
	// check's valid format
	if(in_array($ext, $valid_extensions)) 
	{					
		$path = $path.strtolower($final_image);	
			
		if(move_uploaded_file($tmp,$path)) 
		{
			echo "<img src='$path' />";
                        $_SESSION['img_loc']=$final_image;
		}
	} 
	else 
	{
		echo 'invalid';
	}
}


?>
