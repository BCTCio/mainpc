<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 <link media="screen" charset="utf-8" rel="stylesheet" href="css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/layout.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/child.css" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/jquery.onebyone.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<!--[if (IE 6)|(IE 7)]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</link>
<style>
.header .nav .standard ul.tabs li.current a{
	    color: #FFF;
    background-color: #1173B5;
    border-radius: 5px;
}
 
</style>

<body>
<div class="header">
<div class="nav">


<div class="container">

<!-- Standard Nav (x >= 768px) -->
<div class="standard">

<div class="five column alpha">
<div class="logo">
<a href="index.php"><img src="images/logo.png" /></a><!-- Large Logo -->
</div>
</div>

<div class="eleven column omega tabwrapper">
<div class="menu-wrapper">
<ul class="tabs menu">
<li <?php echo ($page == 'Home') ? 'class="current"' : '';?>><a href="index.php"  style="padding:10px" ><span>Home</span></a> 
</li>
<li><a href="#">Projects</a>
<ul class="child">
<li <?php echo ($page == 'Hotel') ? 'class="current"' : '';?>><a href="projects.php"  style="padding:10px" >Hotel</a></li>
<li <?php echo ($page == 'comingsoon') ? 'class="current"' : '';?>><a href="comingsoon.php"  style="padding:10px">Condo</a></li>
<li <?php echo ($page == 'comingsoon') ? 'class="current"' : '';?>><a href="comingsoon.php"  style="padding:10px">Supermarket</a></li>
<li <?php echo ($page == 'comingsoon') ? 'class="current"' : '';?>><a href="comingsoon.php"   style="padding:10px">Restaurant</a></li>
</ul>
 
</li>


<li <?php echo ($page == 'Cerificates') ? 'class="current"' : '';?>>
<a href="cerificates.php">Cerificates </a>
 
</li>
<li <?php echo ($page == 'AboutUs') ? 'class="current"' : '';?>> <a href="about.php">About Us</a>
 
</li>
<li>
<a href="#">Services </a>
 <ul class="child">
<li <?php echo ($page == 'Surveillance') ? 'class="current"' : '';?>><a href="service-surveillance.php"  style="padding:10px">Surveillance</a></li>
<li <?php echo ($page == 'Networking') ? 'class="current"' : '';?>><a href="service-networking.php"   style="padding:10px">Networking</a></li>
<li <?php echo ($page == 'Alarm') ? 'class="current"' : '';?>><a href="service-alarm.php"  style="padding:10px">Alarm</a></li>
<li <?php echo ($page == 'PhoneSystem') ? 'class="current"' : '';?>><a href="service-phonesystem.php"  style="padding:10px" >Phone System</a></li>
<li <?php echo ($page == 'AccessControl') ? 'class="current"' : '';?>><a href="service-accesscontrol.php"  style="padding:10px">Access Control</a></li>
<li <?php echo ($page == 'Intercom') ? 'class="current"' : '';?>><a href="service-intercom.php"  style="padding:10px">Intercom</a></li>
<li <?php echo ($page == 'Karaoke') ? 'class="current"' : '';?>><a href="service-karaoke.php"  style="padding:10px">Karaoke</a></li>
<li <?php echo ($page == 'PointofSale') ? 'class="current"' : '';?>><a href="service-pointofsale.php"  style="padding:10px">Point of Sale</a></li>
<li <?php echo ($page == 'CreditCardMerchant') ? 'class="current"' : '';?>><a href="service-creditcardmerchant.php"  style="padding:10px">Credit Card Merchant</a></li>
<li <?php echo ($page == 'OnlineOrdering') ? 'class="current"' : '';?>><a href="service-onlineordering.php"  style="padding:10px">Online Ordering</a></li>
</ul>
 
</li>
 
<li <?php echo ($page == 'Contact') ? 'class="current"' : '';?>> <a href="contact.php">Contact</a></li>
</ul>
</div>
</div>
</div>
<!-- Standard Nav Ends, Start of Mini -->

<div class="mini">
<div class="twelve column alpha omega mini">
<div class="logo">
<a href="index.php"><img src="images/logoMINI.png" /></a><!-- Small Logo -->
</div>
</div>

<div class="twelve column alpha omega navagation-wrapper">
 
 <link rel="stylesheet" href="libs/slidebars.css">
 <script src="libs/slidebars.js"></script>
<script>
( function ( $ ) {
$( document ).ready( function () {
	// Create a new instance of Slidebars
	var controller = new slidebars();
	
	// Initialize Slidebars
	controller.init();
	
	/**
	 * Control Classes
	 */
	
	// Open left
	$( '.open-left' ).on( 'click', function ( event ) {
// Stop default behaviour and propagation
event.preventDefault();
event.stopPropagation();

// Open Slidebar
controller.open( 'sb-1' );
	} );
	
	// Toggle left
	$( '.toggle-left' ).on( 'click', function ( event ) {
// Stop default behaviour and propagation
event.preventDefault();
event.stopPropagation();

// Toggle Slidebar
controller.toggle( 'sb-1' );
	} );
	
	// Close left
	$( '.close-left' ).on( 'click', function ( event ) {
// Stop default behaviour and propagation
event.preventDefault();
event.stopPropagation();

// Close Slidebar
controller.close( 'sb-1' );
	} );
	
	// Close any
	$( '.close-any' ).on( 'click', function ( event ) {
// Check if a Slidebar is open
if ( controller.active( 'slidebar' ) ) {
// Stop default behaviour and propagation
event.preventDefault();
event.stopPropagation();

// Close any Slidebar
controller.close();
}
	} );
} );
} ) ( jQuery );
</script>
        
        
<div class="btn btn-default open-left"><div class="sb-toggle-left" style="margin-top:-50px;">
<div class="navicon-line"></div>
<div class="navicon-line"></div>
<div class="navicon-line"></div>
</div></div>

<div off-canvas="sb-1 left reveal" style="	-webkit-box-shadow: 10px 0px 5px -8px rgba(0,0,0,0.43);
-moz-box-shadow: 10px 0px 5px -8px rgba(0,0,0,0.43);
box-shadow: 10px 0px 5px -8px rgba(0,0,0,0.43);" >
<div class="sb-slidebar sb-left">	
<div class="btn btn-default close-left" style="float:right; padding:10px;">Close <img src="images/close.png" width="15" /></div>
<!-- Lists in Slidebars -->
<ul class="sb-menu">

<li>
 <a href="index.php"> Home </a> 
</li>
 
<li><a class="sb-toggle-submenu" href="#">Projects <span class="sb-caret"></span></a>
<ul class="sb-submenu">
<li><a href="projects.php" >Hotel</a></li>
<li><a href="comingsoon.php" >Condo</a></li>
<li><a href="comingsoon.php">Supermarket</a></li>
<li><a href="comingsoon.php"  >Restaurant</a></li>
</ul>
</li>

 
<li>
<a href="cerificates.php">Cerificates </a>
 
</li>
<li>
<a href="about.php">About Us</a>
 
</li>
<li><a class="sb-toggle-submenu" href="#"> Services <span class="sb-caret"></span></a>
<ul class="sb-submenu">
<li><a href="service-surveillance.php" >Surveillance</a></li>
<li><a href="service-networking.php" >Networking</a></li>
<li><a href="service-alarm.php">Alarm</a></li>
<li><a href="service-phonesystem.php"  >Phone System</a></li>
<li><a href="service-accesscontrol.php">Access Control</a></li>
<li><a href="service-intercom.php">Intercom</a></li>
<li><a href="service-karaoke.php">Karaoke</a></li>
<li><a href="service-pointofsale.php">Point of Sale</a></li>
<li><a href="service-creditcardmerchant.php">Credit Card Merchant</a></li>
<li><a href="service-onlineordering.php">Online Ordering</a></li>
</ul>
 
</li>
 
<li>
<a href="contact.php">
Contact</a></li>
 
</ul>
</div>
</div>
	       
</div> 
</div>  
</div> 

</div>

</body>

        
        
        
        
        
 