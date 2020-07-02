<?php
$ds = DIRECTORY_SEPARATOR;  //1
 date_default_timezone_set("Asia/Kolkata");
$current_date_time=date("Y-m-d")." ".date("h:i:s");
$storeFolder = 'uploads';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =$targetPath.$current_date_time.$_FILES['file']['name'];  //5

 
    move_uploaded_file($tempFile,$targetFile); //6
     
}
?>     
