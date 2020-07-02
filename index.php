<?php include "class.DbConnect.php";?>
<!doctype html>
<html>
    <head>
        <title>Madhusudan | Web Developer & Designer</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Tangerine">
        
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/text_animation_style.css">
        <link rel="stylesheet" href="css/fonts.css">
        <!--<link rel="stylesheet" href="css/preloader.css">-->
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/dropzone.css">
        <link rel="icon" href="images/favicon.png">
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        
        <script src="js/modernizr.custom.js"></script>
        
    </head>
  
    <body class="white" style="">
        
        <?php include_once("analyticstracking.php") ?>
        
        <!--Navigation Bar-->
        <div class="navbar-fixed" id="menu">
            <nav class=" transparent">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo text-bold white-text" id="brand-logo"></a>
                    <!--<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>-->
                    <ul class="right  hide-on-med-and-down">
                        <li><a class="black-text" href="#home">HOME</a></li>
                        <li><a class="black-text" href="#about">ABOUT</a></li>
                        <li><a class="black-text" href="#services">SERVICES</a></li>
                        <li><a class="black-text" href="#_testimonial">TESTIMONIAL</a></li>
                        <li><a class="black-text" href="#contact">CONTACT</a></li>
                    </ul>
                   <!-- <ul id="mobile-demo" class="side-nav">
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold"><a href="#home" class="waves-effect waves-teal">HOME</a></li>
				<li class="bold"><a href="#about" class="waves-effect waves-teal">ABOUT</a></li>
                                <li class="bold"><a href="#services" class="waves-effect waves-teal">SERVICES</a></li>
                                <li class="bold"><a href="#_testimonial" class="waves-effect waves-teal">TESTIMONIAL</a></li>
                                <li class="bold"><a href="#contact" class="waves-effect waves-teal">CONTACTS</a></li>
                            </ul>
                        </li>
                    </ul>-->
                </div>
            </nav>
        </div>
        
        <div class="container-fluid " id="container-fluid">
<!--            <img src="images/me.jpg" class="responsive-img">-->
            <!--Navbar Open Close-->
            <div class="row" id="home">
                <div class="col  offset-l11 offset-m11 offset-s9 hide-on-med-and-down">
                    <a href="#" id="open" ><i id="open-i" class="material-icons medium orange-text">M</i></a>
                    <a href="#" id="close"><i id="close-i" class="material-icons medium orange-text">close</i></a>
                </div>
            </div>
           
            <!--Section 1 I am Web Developer-->
            <div class="row" id="web-developer">
                <br><br><br><br><br><br><br>
                <div class="col l12 m12 s12">
                    <h1 class=" white-text center" id="im">Hi, I'm <text id="md">Madhusudan</text></h1>
                </div>
            
                <div class="col l12 m12 s12 center">
                    <svg class="content" viewBox="0 0 3000 200">  <svg viewBox="0 0 6000 300"> 

                        <symbol id="s-text">
                            <text text-anchor="middle" x="50%" y="50%" dy="0.35em">
                                Web Developer / Designer 
                            </text>
                        </symbol>
                        <use xlink:href="#s-text" class="text"></use>
                        <use xlink:href="#s-text" class="text"></use>
                        <use xlink:href="#s-text" class="text"></use>
                        <use xlink:href="#s-text" class="text"></use>
                        <use xlink:href="#s-text" class="text"></use>
                    </svg>

                </div>
            </div>
            
            <!--Scroll icon-->
            <div class='icon-scroll grey-text '></div>
            
            <br><br> <br><br> <br> <br><br><br><br id="about"><br>
            
            <!--Section 2 Get to Know Me-->
            <div class="card">
                <div class="row card card-title z-depth-4 z-depth-4 z-depth-4 section-header-main">
                    <div class="col l12 m12 s12 center ">
                        <p class="text-darken-4 section_header">Get To Know Me</p>
                    </div>

                    <div class="col l12 m12 s12 center">
                        <img src="images/get2knwme.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col l10 offset-l1 ">
                        <p id="get2knwme-p" class="center grey-text">
                          Hi, I am Jamshedpur-native, interested in entrepreneurship. I write in HTML,JQUERY,CSS AND PHP. I also can speak to databases and make servers do stuff. I like working on scalability, performance, design and great user experiences. When I'm not coding, I'm probably hanging out with my friends, playing computer games, watching movies, listening to music and chatting with friends.
                        </p>
                    </div>
                </div>
            
                <!--Section 2.1 Get to Know Me Social -->
                <div class="row" >
                    <div class="component">
                        <a target="_blank" href="https://www.facebook.com/virtuemaddy" class="icon icon-cube facebook">facebook</a>
                        <a target="_blank" href="#" class="icon icon-cube twitter">twitter</a>
                        <a target="_blank"href="https://plus.google.com/u/0/+MADHUSUDANDAStoxicinside/" class="icon icon-cube googleplus">google+</a>
                        <a href="#contact" class="icon icon-cube whatsapp">github</a>
                        <a target="_blank" href="https://www.linkedin.com/profile/view?id=AAMAAAWL10oBAieihcFTf2wE3eh5V063i0z11-8&trk=hp-identity-name" class="icon icon-cube linkdin">linkdin</a>
                    </div>
                </div>
            </div>
            
            <br><br><br>
            
            <!--Section 3 My Skills-->
            <div class="card"  >
                <div class="row card card-title z-depth-4 z-depth-4 section-header-main">
                    <div class="col l12 m12 s12 center">
                        <p class="center section_header"> MY SKILLS</p>
                    </div>

                    <div class="col l12 m12 s12 center">
                        <div class="image">
                           <img src="images/my_skill.png">  
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <br>
                    <div class="col l12 m12 s12 center grey-text">
                        <div class="col l2 m4 s6 ">
                            <div class="col l12 m12 s12 sk1" data-percent="80"></div>
                            <div class="col l10 m8 s12"><p>HTML/CSS</p></div>
                        </div>
                        <div class="col l2 m4 s6">
                            <div class="col l12 m12 s12 sk2" data-percent="85"></div>
                            <div class="col l10 m8 s12"><p>BOOTSTRAP/MATERALIZE</p></div>
                        </div>
                        <div class="col l2 m4 s6">
                            <div class="col l12 m12 s12 sk3" data-percent="55"></div>
                            <div class="col l10 m8 s12"><p>PHOTOSHOP</p></div>
                        </div>
                        <div class="col l2 m4 s6">
                            <div class="col l12 m12 s12 sk4" data-percent="65"></div>
                            <div class="col l10 m8 s12"><p>JS/JQUERY/AJAX</p></div>
                        </div>
                        <div class="col l2 m4 s6">
                            <div class="col l12 m12 s12 sk5" data-percent="60"></div>
                            <div class="col l10 m8 s12"><p>PHP-MYSQL</p></div>
                        </div>
                        <div class="col l2 m4 s6">
                            <div class="col l12 m12 s12 sk6" data-percent="75"></div>
                            <div class="col l10 m8 s12"><p>PROBLEM SOLVING</p></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <br><br><br>
            
            <!--Section 4 Work Experience -->
            <div class="card" >
                <div class="row  card card-title  z-depth-4 section-header-main">
                    <div class="col l12 m12 s10 center">
                        <p class="center section_header"> WORK EXPERIENCE</p>
                    </div>

                    <div class="col l12 m12 s12 center">
                        <div class="image">
                           <img src="images/my_work.png">  
                        </div>
                    </div>
                </div>
            
                <div class="row center">
                    <div class="col l3 m6 s7">
                        <div class="card card-content z-depth-1">
                            <h5 class="center card blue  white-text">2011-2014</h5>
                            <h5 class="center">Core Member</h5>
                            <h6 class="center red-text lighten-5">GLUG(GNU LINUX USER GROUP)</h6>
                            <h6>(NIT DURGAPUR)</h6>
                        </div>
                    </div>

                    <div class="col l3 m6 s5">
                        <div class="card card-content z-depth-1">
                            <h5 class="center card blue  white-text">2012-2013</h5>
                            <h5 class="center">Creative Head</h5>
                            <h6 class="center red-text lighten-5">Centre For Apps Developement</h6>
                            <h6>(NIT DURGAPUR)</h6>
                        </div>
                    </div>

                    <div class="col l3 m6 s6">
                        <div class="card card-content z-depth-1">
                            <h5 class="center card blue  white-text">2014-Now</h5>
                            <h5 class="center">Freelancer</h5>
                            <h6 class="center red-text lighten-5">Web Developer & Designer</h6>
                            <h6><br></h6>
                        </div>
                    </div>

                    <div class="col l3 m6 s6">
                        <div class="card card-content z-depth-1">
                            <h5 class="center card blue  white-text">2016-Now</h5>
                            <h5 class="center">My Own</h5>
                            <h6 class="center red-text lighten-5">Project Creator</h6>
                            <h6><br></h6>
                        </div>
                    </div>
                </div>
            </div>
          
            <br ><br id="services"><br >
            
            <!--Section 5 Services -->
            <div class="card" >
                <div class="row card card-title  z-depth-4 section-header-main">
                    <div class="col l12 m12 s12 center">
                        <p  class="center section_header">SERVICES</p>
                    </div>

                    <div class="col l12 m12 s12 center">
                        <div class="image">
                            <img src="images/my_services.png">  
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row center  " id="services" >
                    <div class="col l12 m12 s12" >
                        <div class="col l3 m6 s12 card service-col" style="border-left:1px dotted grey" >
                            <div class="col l12 m12 s12">
                                <img src="images/web_sol.png" width="250px"> 
                            </div>
                            <div class="col l12 m12 s12">
                                <h4 class="center">Web Solutions</h4>
                            </div>
                            <div class="col l12 m12 s12">
                               <p class="center section_service_p">Trying to solve your business problem by creating web applications that can handle most of your work.</p>
                            </div>
                        </div>
                        <div class="col l3 m6 s12 card service-col">
                            <div class="col l12 m12 s12">
                              <img src="images/web_prog.png" width="250px"> 
                            </div>
                            <div class="col l12 m12 s12">
                                <h4 class="center">Web Programming</h4>
                            </div>
                            <div class="col l12 m12 s12">
                                <p class="center section_service_p">As you noticed i"m a web programmer that"s meant I made web templates alive by adding to it database and dynamics.</p>
                            </div>
                        </div>
                        <div class="col l3 m6 s12 card service-col">
                            <div class="col l12 m12 s12">
                                <img src="images/idea.png" width="250px"> 
                            </div>
                            <div class="col l12 m12 s12">
                                <h4 class="center">Ideas</h4>
                            </div>
                            <div class="col l12 m12 s12">
                                <p class="center section_service_p">Just tell me what you want and i"ll try hard to give you great ideas and solutions that can help you and make it easy for you.</p>
                            </div>
                        </div>
                        <div class="col l3 m6 s12 card service-col">
                            <div class="col l12 m12 s12">
                               <img src="images/config.png" width="250px"> 
                            </div>

                            <div class="col l12 m12 s12">
                                <h4 class="center">Web Configuration</h4>
                            </div>
                            <div class="col l12 m12 s12" >
                                <p class="center section_service_p">Do you have any template and you want to make it live and more dynamics or you have troubles in your site?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
             <br><br><br>
            
             <!--Section 6 Process of Everything-->
            <div class="card ">
                <div class="row card card-title  z-depth-4 section-header-main">
                    <div class="col l12 m12 s12 center">
                        <p class="center section_header">PROCESS OF EVERYTHING</p>
                    </div>
                    <div class="col l12 m12 s12 center">
                        <div class="image">
                            <img src="images/process.png">  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l12 m12 s12 center" >
                        <br><br>
                        <img src="images/poe.png" width="1000px" class="responsive-img">
                        <br><br>
                    </div>
                </div>
            </div>
            
             <br><br id="_testimonial"><br>
            
             <!--Section 7.1 Wanna Say something about me-->
             <div class="card bordered " id="wssam">
                 <div class="row card card-title  z-depth-4 section-header-main">
                     <div class="col l12 m12 s12">
                         <h3 class="center white-text">Wanna Say Something About Me</h3> 
                         <span class="left"><button id="wmt" class="btn btn-default orange white-text">BACK</button></span>
                     </div>
                    <div class="col l12 m12 s12 center">
                        <div class="image">
                            <img src="images/my_testimonial.png">  
                        </div>
                    </div>
                     <div class="col l12 m12 s12 center">
                         <h5>Leave Your Testimonial</h5>
                     </div>
                </div>
                <div class="row">
                        <div class="col l6 m6 s6">
                            <input type="text" class="input-field" name="name_t" id="name_t" placeholder="Your Name" >
                        </div>
                        <div class="col l6 m6 s6">
                            <input type="text" class="input-field" name="email_t" id="email_t" placeholder="Your Email">
                        </div>
                        <div class="col l6 m6 s6">
                            <textarea  style="width:100%; height: 150px; resize: none; outline: none"  class="input-field white grey-text" id="message_t" name="message_t" placeholder="YOUR MESSAGE(MAX 200 CHARACTERS)"></textarea>
                        </div>
                        <div class="col l6 m6 s6 center" style="margin-top:15px;" >
                            <!--<br><br><br>-->
                            
                            <div class="col l4 m4 s4">
                            <br><br><br>
                                <form action="upload.php" id="my-awesome-dropzone" class="dropzone card"><span id="img_err" class="red-text"></span></form>
                        </div>
                </div>
                        <div class="row">
                    <div class="col l12 m12 s12 center">
                                <br><br>
                                <input type="button" id="submit_t" class="btn btn-default orange white-text" value="SEND YOUR RESPONSE">
                    </div>
                </div>
             </div>
             
             </div>
             
            <!-- Section 7 Testimonial-->
            <div class="card" id="testimonial" >
                <div class="row card card-title z-depth-4 section-header-main">
                    <div class="col l12 m12 s12 center">
                        <p class="center section_header">TESTIMONIAL</p>
                    </div>
                    <div class="col l12 m12 s12 center">
                        <div class="image">
                            <img src="images/my_testimonial.png">  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l12 m12 s12">
                        <?php include "testimonial.php";?>
                    </div>  
                </div>
            
<!--            <br><br><br><br><br>-->
            
                <div class="row">
                    <div class="col l12 m12 s12 center">
                        <div class="image center">
                            <!--<img src="images/my_testimonial.png">-->  
                        </div>
                    </div>

                    <div class="col l12 m12 s12 center" >
                        <br>
                        <button class="btn btn-default orange white-text " id="wss">Wanna Say Something ?</button>
                    </div>
                </div>
            </div>
            
            <br><br id="contact"><br > 
            
            <!-- Section 9 Contact -->
            <div class="card " >
                <div class="row card card-title  z-depth-4 section-header-main">
                    <div class="col l12 m12 s12 center" >
                        <p  class="center section_header">Get In Touch</p>
                    </div>

                    <div class="col l12 m12 s12 center" >
                        <div class="image">
                            <img src="images/my_contact.png">  
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col l12 m12 s12">
                        <div class="col l4 m12 s12 card card-panel center blue white-text">
                            <div class="col l12 m12 s12 ">
                                <h5 class="center black-text">Say Hi To Me :)</h5>
                            </div>
                            
                            <div class="col l12 m12 s12">
                                <hr>
                            </div>
                            
                            <div class="col l12 m12 s12">
                                <p>Current Place : Jamshedpur</p>
                            </div>
                            
                             <div class="col l12 m12 s12">
                                 <p>Contact No    : +91-9031351758</p>
                            </div>
                            
                            <div class="col l12 m12 s12">
                                <p>Email id       : madhusudan707@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="col l6 m12 s12 card offset-l1">
                            <span class="center  card red-text" id="email_msg_c"></span>
                            <h5 class="center">Leave Me a Message</h5>
                            <hr>
                            <form id="form_c" method="">
                                <input type="text" class="input-field white grey-text " id="name_c" name="name_c" placeholder="NAME">
                                <input type="text" class="input-field white grey-text" id="email_c" name="email_c" placeholder="EMAIL">
                                <textarea  style="width:100%; height: 150px; resize: none; outline: none"  class="input-field white grey-text" id="message_c" name="message_c" placeholder="YOUR MESSAGE(MAX 200 CHARACTERS)"></textarea>
                                <input type="button" id="submit_c" class="btn btn-block  white-text " value="SEND">
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
             <!--Section 10 My Resume -->
            <div class="card card-title  section-header-main" >
                <div class="row">
                    <div class="col l12 m12 s12 center">
                        <div class="image">
                            <img src="images/my_resume.png">  
                        </div>
                    </div>
                    <div class="col l12 m12 s12 center">
                         <br>
                         <button class="btn btn-large" style="cursor: not-allowed" disabled>MY RESUME</button>
                    </div>

                    <div class="col l12 m12 s12 center">
                        <br>
                         <h5 style="font-family: copyb">All rights reserved © 2016 konnect2maddy.com</h5>
                         <!--<h5 style="font-family: copyb">All rights reserved © 2016 konnect2maddy.com</h5>-->
                    </div>

                </div>
            </div>
             
            <!--Back to Top Icon -->
             <a href="#" class="back-to-top orange" style="display: inline;display: none">Back to Top</a>
             
             <!--pre loader-->
             <div id="loader-wrapper">
                <div id="loader"></div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </body>
    <script src="js/jquery-3.0.0.js"></script>           
    <script src="js/materialize.js"></script>
    <script src="js/jquery.circlechart.js"></script>
    <script src="js/testimonial.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/anchor.js"></script>
    <script src="js/anchor_script.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'></script>
    <script src="js/index.js"></script>
    <script src="js/jquery.cbpQTRotator.min.js"></script>
    <script src="js/dropzone.js"></script>
    
    <script>
        $( function() {
            /*
            - how to call the plugin:
            $( selector ).cbpQTRotator( [options] );
            - options:
            {
                    // default transition speed (ms)
                    speed : 700,
                    // default transition easing
                    easing : 'ease',
                    // rotator interval (ms)
                    interval : 8000
            }
            - destroy:
            $( selector ).cbpQTRotator( 'destroy' );
            */

            $( '#cbp-qtrotator' ).cbpQTRotator();

        } );
</script>

<script>
 Dropzone.options.myAwesomeDropzone = {
  maxFilesize:1,
  maxFiles:1,
  acceptedFiles: ".jpeg,.jpg,.png,.gif",
init: function() {
      this.on("maxfilesexceeded", function(file) {
            this.removeAllFiles();
            this.addFile(file);
            


      });

 }  

 
}
</script>

</html> 
