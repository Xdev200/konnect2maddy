<?php
    
    
    class UidGenerator
    {
        public function uid_gen_testimonial()
        {
            //$pid_check=1;
            //$count=0;
        //while($pid_check) //profile id checking in database
        //{
            global $pid;
            $min=1000;//$max=50000;
            $my_pid=rand(1,1000);
            $milliseconds = round(microtime(true) * 1000);
            $pid=$my_pid.$milliseconds;
//            $fetch_pid=mysql_query("select testimonial_id from  testimonial where testimonial_id='$pid'");
//            $fetch_row=mysql_num_rows($fetch_pid);
//            
//            if($fetch_row)
//            {
//                $pid_check=1;
//                $count++;
//                if($count>$max)
//                {
//                    //echo "Profile id limit out of range";
//                    echo "Something went wrong contact admin";
//                    exit;
//                }
//            }
//
//            else
//            {
//                $pid_check=0;
//
//            }

        //}
             return $pid;
            }
            
        public function uid_gen_contact()
        {
            //$pid_check=1;
                //$count=0;
            //while($pid_check) //profile id checking in database
            //{
                global $pid;
                $min=1000;//$max=50000;
                $my_pid=rand(1,1000);
                $milliseconds = round(microtime(true) * 1000);
                $pid=$my_pid.$milliseconds;
//                $fetch_pid=mysql_query("select contact_id from  contact where contact_id='$pid'");
//                $fetch_row=mysql_num_rows($fetch_pid);
//
//                if($fetch_row)
//                {
//                    $pid_check=1;
//                    $count++;
//                    if($count>$max)
//                    {
//                        //echo "Profile id limit out of range";
//                        echo "Something went wrong contact admin";
//                        exit;
//                    }
//                }
//
//                else
//                {
//                    $pid_check=0;
//
//                }
//
           // }
             return $pid;
        }
            
        }

?>