<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "customerservice@mainpcgroup.com";
     
    $email_subject = "From mainpcgroup.com";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta charset="utf-8" />
<title>MainPC Group USA Inc.</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/layout.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/child.css" />
<!--[if (IE 6)|(IE 7)]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script type="text/javascript" language="javascript" src="js/jquery-1-8-2.js"></script><script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.carousel.js"></script>
<script type="text/javascript" src="js/jquery.color.animation.js"></script>


<!-- color pickers -->
<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
<script type="text/javascript" src="js/colorpicker.js"></script>
<!-- end of color pickers -->

</head>

<body><div class="page-wrapper">
  <div class="slug-pattern"><div class="overlay"><div class="slug-cut"></div></div></div>
        <div class="header">
                <div class="nav">       
                
                <div class="container">
                
                    <!-- Standard Nav (x >= 768px) -->
                    <div class="standard">
                    
                        <div class="five column alpha">
                            <div class="logo">
                               <a href="index.html"><img src="images/logo.png" /></a><!----------------------- Large Logo ----------------------->
                            </div>
                        </div>
                    
                        <div class="eleven column omega tabwrapper">
                            <div class="menu-wrapper">
                               <ul class="tabs menu">
<li>
  <a href="index.html" ><span>Home</span></a> 
</li>
<li><a href="projects.html" >Projects</a>
  
<li>
<a href="cerificates.html">Cerificates</a>

</li>
 <li>
<a href="about.html">About Us</a>

</li>
 <li>
<a href="#">Services</a>
 <ul class="child">
<li><a href="service-surveillance.html" >Surveillance</a></li>
<li><a href="service-networking.html" >Networking</a></li>
<li><a href="service-alarm.html">Alarm</a></li>
<li><a href="service-phonesystem.html"  >Phone System</a></li>
<li><a href="service-accesscontrol.html">Access Control</a></li>
<li><a href="service-intercom.html">Intercom</a></li>
<li><a href="service-karaoke.html">Karaoke</a></li>
<li><a href="service-pointofsale.html">Point of Sale</a></li>
<li><a href="service-creditcardmerchant.html">Credit Card Merchant</a></li>
<li><a href="service-onlineordering.html">Online Ordering</a></li>
</ul>
</li>

<li>
<a href="contact.html"  class="active">
Contact</a></li>
</ul>
  </div>
</div>
</div>
                    <!-- Standard Nav Ends, Start of Mini -->
                    
                    <div class="mini">
                        <div class="twelve column alpha omega mini">
                            <div class="logo">
                                <a href="index.html"><img src="images/logoMINI.png" /></a><!-- Small Logo -->
                            </div>
                        </div>
                        
                        <div class="twelve column alpha omega navagation-wrapper">
                            <select class="navagation">
                                <option value="" selected="selected">Menu</option>
                            </select>
                        </div>
                    </div>
                    <!-- Start of Mini Ends -->
                </div> 
                
            </div>
            
            <div class="shadow"></div>
            <div class="container">
                <div class="page-title">
                    <div class="rg"></div>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container">
                        <div class="sixteen map columns"> 
                            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.14411017471!2d-73.97766399999999!3d40.60464400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c244fc988b1b57%3A0x504a3c74e0cdc886!2s340+Kings+Hwy%2C+Brooklyn%2C+NY+11223!5e0!3m2!1sen!2sus!4v1434227460165" width="100%" height="260" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                        <div class="sixteen columns"><span class="hr mapdv"></span></div>
                        <div class="five columns">
                            <h5 class="semi">About Us</h5>
                            <p>Here's how to get in touch with us:</p>
                            
                            <h5 class="semi">Contact Info</h5>
                            <p>
                               340 Kings Hwy.<br />
                    Brooklyn. NY 11223 
                                <span class="hr"></span>
                                Phone: (718)627-3977<br />                          
                                Fax: (718)998-2899<br />      
                                 <span class="hr"></span>           
                                sales:Joe@mainpcgroup.com<br />                           
                               service: Richard.chen@mainpcgroup.com
                            </p>
                             <p>   <span class="hr"></span>Or Visit our retail store. We look forward to hearing from you. <br />
                            <br />
                            <strong>Brooklyn Borough:</strong>  <br />
 
                                  340 Kings Hwy.<br />
Brooklyn, NY 11223 <br />
                                                              </p>
                            
                        </div>
                        <div class="contact eleven columns">
                            <div class="standard-form compressed">
                                <h4 class="semi">Thank you for contacting us <br />
 we will get back to you soon!</h4>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="footer style-2">
	<div class="background"><div class="stitch"></div></div>
<div class="foot-nav-bg"></div>
	<div class="content">
<div class="patch"></div>
<div class="blur"></div>
<div class="pattern">

<div class="clear"></div>
</div>
<div class="sixteen columns alpha omega">
	<div class="foot-nav-bg"></div>
<div class="foot-nav">
  
<div class="nav">
<div class="copy">
Coptyright © 2013 Main Group USA All Rights Reserved • Powered by AM STUDIO. 
</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slidewrap2').carousel({
                slider: '.slider',
                slide: '.slide',
                slideHed: '.slidehed',
                nextSlide : '.next',
                prevSlide : '.prev',
                addPagination: false,
                addNav : false
            });
            $('.slide.testimonials').contentSlide({'nav': false});
        });
    </script>
    <script type="text/javascript" src="js/jquery.color.animation.js"></script>
    <script src="ajax/ajax_default.js" type="text/javascript"></script>
    <script src="ajax/email_conf.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>

    </div>
</body>

</html>
 
<?php
}
die();
?>