<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/includes/cedera-data-class.php');
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php $site_url ?>/css/layout.css" />
<meta name="description" content="Cedera Landscapes - Creating high quality landscapes and exceeding customer expectations since 2005. " />
<meta name="keywords" content="cedera, landscapes, cederalandscapes, lawn care, lawn maintenance, lawn, lawns, snow removal, sprinkler systems, install sprinkler systems, cedera landscapes, cedera land scapes, swan valley, swanvalley, cedera lanscapes in swan valley idaho" />
<title>Cedera Landscapes, LLC</title>
<!--slideshow css files -->
<script src="JavascriptFiles/mootools.js" type="text/javascript"></script>
<script src="JavascriptFiles/slideshow.js" type="text/javascript"></script>
<script src="JavascriptFiles/backgroundslider.js" type="text/javascript"></script>
<link href="CSSFiles/slideshow.css" rel="stylesheet" type="text/css" />
<!--End slideshow css files -->

//
// function analytics renders google analytics information on page
//
analytics();
?>
<style>
#left a {
	display:block;
	padding-bottom:5px;
}
#right {
	text-align:center;
}
</style>
</head>
<body>
<div id="Content"> 
  <!-- links are included in the cedera-data-class.php file and contain upper links and logo -->
  <?php links(); ?>
  <!-- wrapper contains the page content-->
  <div id="wrapper"> 
    <!-- left contains the left div information -->
    <div id="left">
      <h1>Cedera Landscapes</h1>
      <p>Since 2005 Cedera Landscapes, LLC has been taking great pride in building beautiful landscapes from the ground up.</p>
    <?php links(); ?>
    <!-- right contains the right div information-->
    <div id="right">
      <h1>Welcome to Cedera Landscapes</h1>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js">
    		</script>
      <div id="wall"><!-- 3D Wall Goes Here --></div>
      <script>
        var flashvars = {
            feed: "api://picasaweb.google.com/?search=cederaindex&style=light"
			//api://www.flickr.com/?album=72157625774882989&style=light
					
        };
        var params = {
             allowFullScreen: "true",
             allowscriptaccess: "always"
        };
        swfobject.embedSWF("http://apps.cooliris.com/embed/cooliris.swf",
            "wall", "600", "450", "9.0.0", "",
            flashvars, params);
    </script> 
    </div>
  </div>
</div>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
