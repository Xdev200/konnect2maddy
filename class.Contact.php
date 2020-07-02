<?php
class Contact
{
    public function insert_contact($contact_id,$name_c,$email_c,$message_c)
    {
       $insert = mysql_query("insert into contact (contact_id,name,email,your_msg,created_on) "
               . "values ('$contact_id','$name_c','$email_c','$message_c',now())") or die(mysql_error());
    
       return $insert;
    }
}

?>
