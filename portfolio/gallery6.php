<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php $site_url ?>/css/layout.css" />
<meta name="description" content="Cedera Landscapes - Creating high quality landscapes and exceeding customer expectations since 2005. " />
<meta name="keywords" content="cedera, landscapes, cederalandscapes, lawn care, lawn maintenance, lawn, lawns, snow removal, sprinkler systems, install sprinkler systems, cedera landscapes, cedera land scapes, swan valley, swanvalley, cedera lanscapes in swan valley idaho" />
<title>Cedera Landscapes, LLC</title>
<!-- start of slideshow scripts -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/chili-1.7.pack.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>

<script type="text/javascript">
$(function() {

    $('#slideshow').cycle({
        fx:      'scrollHorz',
        timeout:  4000,
        prev:    '#prev',
        next:    '#next',
    });
});
</script>

<!-- end of slideshow scripts -->
<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/includes/cedera-data-class.php');
//
// function analytics renders google analytics information on page
//
analytics();
?>
</head>
<body>
<div id="Content"> 
  <!-- links are included in the cedera-data-class.php file and contain upper links and logo -->
  <?php links(); ?>
  <!-- wrapper contains the page content-->
  <div id="wrapper"> 
    <!-- left contains the left div information -->
    <div id="left">
<?php porfolio_links(); ?>
    </div>
    <!-- right contains the right div information-->
    <div id="right">
    <h1>Gallery 6</h1>
    <div id="slideshow" class="pics">
    	<img class="first" src="<?php $site_url ?>/images/portfolio/gallery6/001.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/008.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/025.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/039.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/077.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/078.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/079.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/080.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/081.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/115.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/116.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/117.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/118.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/159.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/184.jpg" />
        <!--
        <img src="<?php $site_url ?>/images/portfolio/gallery6/483.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/548.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/552.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/554.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/555.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/556.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/560.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/561.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/576.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/568.jpg" />
        <img src="<?php $site_url ?>/images/portfolio/gallery6/570.jpg" />
        -->
    </div>
    <div id="buttons">
        <a href="#"><span id="prev">Prev</span></a> 
        <a href="#"><span id="next">Next</span></a>
    </div>
    </div>
  </div>
</div>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>