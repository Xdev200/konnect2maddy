<?php
    include "class.DbConnect.php";
    include "class.Contact.php";
    include "class.UidGenerator.php";
    $name_c=$_POST['name_c'];
    $email_c=$_POST['email_c'];
    $message_c=$_POST['message_c'];
    
    if (!filter_var($email_c, FILTER_VALIDATE_EMAIL) === false) 
    {
//        echo("$email_t is a valid email address");
        echo "1";
        $Db_obj= new Db_Connect();
        $Uid_obj = new UidGenerator();
        $Contact_obj = new Contact();
        
        $contact_id=$Uid_obj->uid_gen_contact();
        $insert_contact = $Contact_obj->insert_contact($contact_id, $name_c, $email_c, $message_c);
        
    
    } 
    else 
    {
        echo "0" ;
    }
    
    
    
    

?>

