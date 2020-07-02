<?php
class Testimonial
{
    public function insert_testimonial($testimonial_id,$name_t,$email_t,$message_t,$current_date_time,$img_loc)
    {
       $insert = mysql_query("insert into testimonial (testimonial_id,name,email,your_msg,created_on,img_loc) "
               . "values ('$testimonial_id','$name_t','$email_t','$message_t','$current_date_time','$img_loc')") or die(mysql_error());
    
       return $insert;
    }
}

?>
