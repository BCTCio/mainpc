<link media="screen" charset="utf-8" rel="stylesheet" href="../css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="../css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="../css/layout.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="../css/child.css" />
<link rel="stylesheet" href="../css/animate.min.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="../css/jquery.onebyone.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<!--[if (IE 6)|(IE 7)]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script type="text/javascript" language="javascript" src="../js/jquery-1-8-2.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.carousel.js"></script>
<script type="text/javascript" src="../js/jquery.color.animation.js"></script>
<script type="text/javascript" src="../js/jquery.prettyPhoto.js" charset="utf-8"></script>
<script type="text/javascript" src="../js/default.js"></script>
<script type="text/javascript" src="../js/jquery.onebyone.min.js"></script>
<script type="text/javascript" src="../js/jquery.touchwipe.min.js"></script>

<!-- color pickers -->
<link rel="stylesheet" media="screen" type="text/css" href="../css/colorpicker.css" />
<script type="text/javascript" src="../js/colorpicker.js"></script>
<!-- end of color pickers -->
 <script type="text/javascript" src="../js/menuPanda.min.js"></script>
<link  rel="stylesheet" href="../css/mpDefaultSkin.css">
</link>


<body>
<div class="header slider-expand">
<div class="nav">


<div class="container">

<!-- Standard Nav (x >= 768px) -->
<div class="standard">

<div class="five column alpha">
<div class="logo">
<a href="../index.html"><img src="../images/logo.png" /></a><!-- Large Logo -->
</div>
</div>

<div class="eleven column omega tabwrapper">
<div class="menu-wrapper">
<ul class="tabs menu">
<li>
 <a href="../index.html" class="active"><span>Home</span></a> 
</li>
<li><a href="../projects.html">Projects</a>

 
<li>
<a href="../cerificates.html">Cerificates </a>
 
</li>
<li>
<a href="../about.html">About Us</a>
 
</li>
<li>
<a href="#">Services </a>
 <ul class="child">
<li><a href="../service-surveillance.html" >Surveillance</a></li>
<li><a href="../service-networking.html" >Networking</a></li>
<li><a href="../service-alarm.html">Alarm</a></li>
<li><a href="../service-phonesystem.html"  >Phone System</a></li>
<li><a href="../service-accesscontrol.html">Access Control</a></li>
<li><a href="../service-intercom.html">Intercom</a></li>
<li><a href="../service-karaoke.html">Karaoke</a></li>
<li><a href="../service-pointofsale.html">Point of Sale</a></li>
<li><a href="../service-creditcardmerchant.html">Credit Card Merchant</a></li>
<li><a href="../service-onlineordering.html">Online Ordering</a></li>
</ul>
 
</li>
 
<li>
<a href="../contact.html">
Contact</a></li>
</ul>
</div>
</div>
</div>
<!-- Standard Nav Ends, Start of Mini -->

<div class="mini">
<div class="twelve column alpha omega mini">
<div class="logo">
<a href="../index.html"><img src="../images/logoMINI.png" /></a><!-- Small Logo -->
</div>
</div>

<div class="twelve column alpha omega navagation-wrapper">
 
 <link rel="stylesheet" href="../libs/slidebars.css">
 <script src="../libs/slidebars.js"></script>
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
<div class="btn btn-default close-left" style="float:right; padding:10px;">Close <img src="../images/close.png" width="15" /></div>
<!-- Lists in Slidebars -->
<ul class="sb-menu">

<li>
 <a href="../index.html"> Home </a> 
</li>
<li><a href="../projects.html">Projects</a>
 
<li>
<a href="../cerificates.html">Cerificates </a>
 
</li>
<li>
<a href="../about.html">About Us</a>
 
</li>
<li><a class="sb-toggle-submenu" href="#"> Services <span class="sb-caret"></span></a>
<ul class="sb-submenu">
<li><a href="../service-surveillance.html" >Surveillance</a></li>
<li><a href="../service-networking.html" >Networking</a></li>
<li><a href="../service-alarm.html">Alarm</a></li>
<li><a href="../service-phonesystem.html"  >Phone System</a></li>
<li><a href="../service-accesscontrol.html">Access Control</a></li>
<li><a href="../service-intercom.html">Intercom</a></li>
<li><a href="../service-karaoke.html">Karaoke</a></li>
<li><a href="../service-pointofsale.html">Point of Sale</a></li>
<li><a href="../service-creditcardmerchant.html">Credit Card Merchant</a></li>
<li><a href="../service-onlineordering.html">Online Ordering</a></li>
</ul>
 
</li>
 
<li>
<a href="../contact.html">
Contact</a></li>
 
</ul>
</div>
</div>
	       
</div> 
</div>  
</div> 

</div>

</body><script type="text/javascript" src="../js/app.js"></script>

<script type="text/javascript">
<!--
$(window).load(function(){
// Setup Slider
$(".onebyone.hide").fadeIn(1000);
$('.onebyone').oneByOne({
className: 'oneByOne1', 
easeType: 'random',
autoHideButton: true,
width: 960,
height: 840,
minWidth: 680,
slideShow: true
});
 $("a[class^='prettyPhoto']").prettyPhoto({social_tools: '' });
});
$(document).ready(function() {
$('.slidewrap, .slidewrap2').carousel({
slider: '.slider',
slide: '.slide',
slideHed: '.slidehed',
nextSlide : '.next',
prevSlide : '.prev',
 
addPagination: false,
addNav : false
});
$('.slide.testimonials').contentSlide();
$('.bbss').contentSlide();
});
// -->
</script>
      <script src="../js/jquery.simple-sidebar.min.js"></script>
        <script>
$(document).ready(function() {
    $.ajaxSetup({
cache: false
	});

    $('#main-navbar').load('navbar.html', function() {
        $('#main-sidebar-wrapper').load('sidebar.html');

        $('#main-sidebar').simpleSidebar({
opener: '#toggle-sidebar',
wrapper: '#main',
animation: {
    easing: "easeOutQuint"
},
sidebar: {
    align: 'left',
    closingLinks: '.close-sb',
},
sbWrapper: {
    display: false
}
        });
    });
});
        </script>