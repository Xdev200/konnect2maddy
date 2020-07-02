<?php
    error_reporting(0);
    session_start();
    date_default_timezone_set("Asia/Kolkata");
    include "class.DbConnect.php";
    include "class.Testimonial.php";
    include "class.UidGenerator.php";
    $name_t=$_POST['name_t'];
    $email_t=$_POST['email_t'];
    $message_t=$_POST['message_t'];
    
     $img_loc='images/testimonial/'.$_SESSION['img_loc'];
     
     if(!isset($_SESSION['img_loc']))
     {
         echo "2";
     }

    else if (!filter_var($email_t, FILTER_VALIDATE_EMAIL) === false) 
    {
//      echo("{$email_t} is a valid email address");
        $current_date_time=date("Y-m-d")." ".date("h:i:s");
        $Db_obj= new Db_Connect();
        $Uid_obj = new UidGenerator();
        $Testimonial_obj = new Testimonial();

        $testimonial_id=$Uid_obj->uid_gen_testimonial();
        $insert_testimonial = $Testimonial_obj->insert_testimonial($testimonial_id, $name_t, $email_t,$message_t,$current_date_time,$img_loc);
        unset($_SESSION['img_loc']);

        echo "1";

    } 
    else 
    {
        echo "0";
    }

    
    
    
    

?>
