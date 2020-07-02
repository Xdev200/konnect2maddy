<?php
session_start();
include "class.DbConnect.php";
$Db_obj= new Db_Connect();
date_default_timezone_set("Asia/Kolkata");
$ds = DIRECTORY_SEPARATOR;  //1
$current_date_time=date("Y-m-d")." ".date("h:i:s");
$storeFolder = 'images/testimonial';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    //$targetFile =  $targetPath. $_FILES['file']['name'];  //5
    $targetFile =$targetPath.$current_date_time.$_FILES['file']['name']; 
 
    move_uploaded_file($tempFile,$targetFile); //6
    
    $_SESSION['img_loc']=$current_date_time.$_FILES['file']['name'];
  
     
}

?>     
