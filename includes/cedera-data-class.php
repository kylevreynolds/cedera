<?php
global $site_url;
//define("$site_url", "http://www.cederalandscapes.com");
$site_url = 'http://cedera';

function footer() {
	global $site_url;
	print '
	<div id="WrapperFooter">
	<div id="footer">
	<div id="footer1">
			 
			<h2>Cedera Landscapes, LLC</h2>
			<p><a href="https://www.facebook.com/#!/pages/Cedera-Landscapes-LLC/145905138803534" target="_blank"><img  class="noBorder" src="'. $site_url .'/images/layout/facebook.png"> Find us on facebook</a></p>
			<div class="fb-like" data-href="https://www.facebook.com/#!/pages/Cedera-Landscapes-LLC/145905138803534" data-send="false" data-width="300" data-show-faces="false"></div>
			<div class="plusone"><!-- Place this tag where you want the +1 button to render -->
<g:plusone annotation="inline" width="300"></g:plusone></div>
		</div>
	<div id="footer2"> 
			<h3>Quick Links</h3>
			<div>
			<div id="LLeft">
			<p><a href="'. $site_url .'/index.php">Home</a></p>
			<p><a href="'. $site_url .'/contact.php">Contact</a></p>
			<p><a href="'. $site_url .'/portfolio.php">Portfolio</a></p>
			</div>
			<div id="LRight">
			<p><a href="'. $site_url .'/services.php">Services</a></p>
			<p><a href="'. $site_url .'/testimonials.php">Testimonials</a></p>
			<p><a href="'. $site_url .'/about.php">About</a></p>
			</div>
			</div>
		</div>
		<div id="footer3">
			<p><img src="'. $site_url .'/images/layout/cedera-logo-2-sm.png" width="275" /></p>
			<p><a href="http://www.bbb.org/boise/business-reviews/landscape-contractors/cedera-landscapes-llc-in-swan-valley-id-1000016190"><img src="'. $site_url .'/images/layout/bbb.jpg" /></a></p>
			<p>Powered By <a href="http://www.reynoldsconsulting.co"><img align="middle" src="'. $site_url .'/images/layout/REYNOLDS-SM.jpg" /></a></p>
		</div>
	</div>
	</div>
	';
}

function links() {
	global $site_url;
	print ' 
	<div id="nav_wrapper">
	<div class="subnav"><a href="'. $site_url .'/index.php">Home</a></div>
    <div class="subnav"><a href="'. $site_url .'/contact.php">Contact</a></div>
    <div class="subnav"><a href="'. $site_url .'/portfolio.php">Portfolio</a></div>
    <div class="subnav"><a href="'. $site_url .'/services.php">Services</a></div>
    <div class="subnav"><a href="'. $site_url .'/testimonials.php">Testimonials</a></div>
    <div class="subnav"><a href="'. $site_url .'/about.php">About</a></div>
</div>
<div id="MainLogo">
	<img src="'. $site_url .'/images/layout/cedera-logo-3.png" />
</div>
	';
}

// left links for portfolio pages 
function porfolio_links() {
	global $site_url;
	print '
	<h1>Portfolio</h1>

      <a class="portLinks" href="'. $site_url .'/portfolio.php">Gallery 1</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery2.php">Gallery 2</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery3.php">Gallery 3</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery4.php">Gallery 4</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery5.php">Gallery 5</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery6.php">Gallery 6</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery7.php">Gallery 7</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery8.php">Gallery 8</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery9.php">Gallery 9</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery10.php">Gallery 10</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery11.php">Gallery 11</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery12.php">Gallery 12</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery13.php">Gallery 13</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery14.php">Gallery 14</a>
      <a class="portLinks" href="'. $site_url .'/portfolio/gallery15.php">Gallery 15</a>
	
	';
	
}
function analytics() {
	print '
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-19034242-14"]);
  _gaq.push(["_trackPageview"]);

  (function() {
    var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;
    ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	';
}

//
// this script is used for replacing the #right div with information that it is linked to on a new page
//
function jqgalscroll() {
	print "
	<script type='text/javascript' src='http://code.jquery.com/jquery-latest.pack.js'></script>
		<script type='text/javascript' src='". $site_url ."/scripts/jqgalscroll.js'></script>
		<script type='text/javascript'>
			var $j = jQuery.noConflict();
			$j(document).ready(function(){
				$j('#one').jqGalScroll();
			});
		</script>
        <link href='". $site_url ."/css/jqGalScroll.css' rel='stylesheet' type='text/css'/>
        ";
        }
?>
