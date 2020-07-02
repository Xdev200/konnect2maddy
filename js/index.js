//Preloader

$(document).ready(function() {

                setTimeout(function(){
                        $('body').addClass('loaded');
                        $('h1').css('color','#222222');
                }, 3000);

        });



//Button Collapse

$(function(){
            $(".button-collapse").sideNav();
           
        });
        
//Nav Bar Open/Close

$(function(){
             $("#open").click(function(){
                $("#menu").slideDown(1000);
                $("#open").hide();
                $("#close").show();
            });
            
            $("#close").click(function(){
                $("#menu").slideUp(1000);
                $("#open").show();
                $("#close").hide();
            });
            
        });

//Write Testimonial

$(function(){
            $("#wss").click(function(){
                $("#testimonial").slideUp(1000);
                $("#wssam").slideDown(1000)
            });
            
            $("#wmt").click(function(){
               $("#testimonial").slideDown(1000);
                $("#wssam").slideUp(1000) 
            });
        });
        
//Skill Percent Circle

$(".sk1").percentcircle();

        $(".sk2").percentcircle({
        animate : true,
        diameter : 100,
        guage: 3,
        coverBg: "#fff",
        bgColor: "#efefef",
        fillColor: "#E95546",
        percentSize: "15px",
        percentWeight: "normal"
        });

        $(".sk3").percentcircle({
        animate : true,
        diameter : 100,
        guage: 3,
        coverBg: "#fff",
        bgColor: "#efefef",
        fillColor: "#DA4453",
        percentSize: "18px",
        percentWeight: "normal"
        });
        $(".sk4").percentcircle({
        animate : true,
        diameter : 100,
        guage: 3,
        coverBg: "#fff",
        bgColor: "#efefef",
        fillColor: "#46CFB0",
        percentSize: "18px",
        percentWeight: "normal"
        });		
        $(".sk5").percentcircle({
        animate : true,
        diameter : 100,
        guage: 3,
        coverBg: "#fff",
        bgColor: "#efefef",
        fillColor: "#8BC163",
        percentSize: "18px",
        percentWeight: "20px"
        });	
        $(".sk6").percentcircle({
        animate : true,
        diameter : 100,
        guage: 10,
        coverBg: "#fff",
        bgColor: "#efefef",
        fillColor: "#D870A9",
        percentSize: "18px",
        percentWeight: "normal"
        });		

 // create the back to top button
        
    $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

        var amountScrolled = 300;

        $(window).scroll(function() {
                if ( $(window).scrollTop() > amountScrolled ) {
                        $('a.back-to-top').fadeIn('slow');
                } else {
                        $('a.back-to-top').fadeOut('slow');
                }
        });

        $('a.back-to-top, a.simple-back-to-top').click(function() {
                $('html, body').animate({
                        scrollTop: 0
                }, 700);
                return false;
        });

