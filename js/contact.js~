$(function(){
    
    $('#submit_c').click(function(){
        var name_c=$('#name_c').val();
        var email_c=$('#email_c').val();
        var message_c=$('#message_c').val();
        
        var go=1;
               if(name_c == "")
               {
                   $('#name_c').attr("placeholder", "Please Tell Me Your Name");
                   $('#name_c').focus();
                   go=0;
                   
                   return false;
               }
               
               if(name_c.length>32)
               {
                   $('#name_c').attr("placeholder", "Name Must not exceed 32 character");
                   $('#name_c').focus();
                   go=0;
                   
                   return false;
                   
               }
               
               if(email_c=="")
               {
                   $('#email_c').attr("placeholder", "Your Email Please");
                   $('#email_c').focus();
                   go=0;
                   
                   return false;
               }
               
               if(email_c.length>32)
               {
                   $('#email_c').attr("placeholder", "Email Must not exceed 32 character");
                   $('#email_c').focus();
                   go=0;
                   
                   return false;
               }
               
              if(message_c=="")
               {
                   $('#message_c').attr("placeholder", "Please Say Something About Me");
                   $('#message_c').focus();
                   go=0;
                   
                   return false;
               }
               
                if(message_c.length>200)
               {
                   $('#message_c').val("");
                   $('#message_c').attr("placeholder", "Message Must not exceed 200 character");
                   $('#message_c').focus();
                   go=0;
                   
                   return false;
               }
               
               
               if(go)
               {
                    $.ajax({
                        type:'post',
                        url:'contact_action.php',
                        data:{name_c:name_c,email_c:email_c,message_c:message_c},
                        success:function(data)
                        {
                           if(data==0)
                             {
                                $('#email_c').val("");
                                $('#email_c').attr("placeholder", "Please Enter Valid Email");
                                $('#email_c').focus();
                             }
                             if(data==1)
                             {
                                //$('#email_msg_c').text("");
                                alert("Thank You For Your Response.");
                                window.location.reload();
                                
                             }
                        }
                    });
                }
    });
});
