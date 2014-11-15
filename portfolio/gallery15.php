<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://www.cederalandscapes.com/css/layout.css" />
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
      <h1>Portfolio</h1>

      <a class="portLinks" href="../portfolio.php">Gallery 1</a>
      <a class="portLinks" href="gallery2.php">Gallery 2</a>
      <a class="portLinks" href="gallery3.php">Gallery 3</a>
      <a class="portLinks" href="gallery4.php">Gallery 4</a>
      <a class="portLinks" href="gallery5.php">Gallery 5</a>
      <a class="portLinks" href="gallery6.php">Gallery 6</a>
      <a class="portLinks" href="gallery7.php">Gallery 7</a>
      <a class="portLinks" href="gallery8.php">Gallery 8</a>
      <a class="portLinks" href="gallery9.php">Gallery 9</a>
      <a class="portLinks" href="gallery10.php">Gallery 10</a>
      <a class="portLinks" href="gallery11.php">Gallery 11</a>
      <a class="portLinks" href="gallery12.php">Gallery 12</a>
      <a class="portLinks" href="gallery13.php">Gallery 13</a>
      <a class="portLinks" href="gallery14.php">Gallery 14</a>
      <a class="portLinks" href="gallery15.php">Gallery 15</a>

    </div>
    <!-- right contains the right div information-->
    <div id="right">
    <h1>Gallery 15</h1>
    <div id="slideshow" class="pics">
    	<img class="first" src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_1962.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_1963.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2029.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2048.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2340.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2518.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2519.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2520.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2521.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2522.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2523.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2525.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2526.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2527.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2528.JPG" />
        <img src="http://www.cederalandscapes.com/images/portfolio/gallery15/IMG_2529.JPG" />
    </div>
    <div id="buttons">
        <a href="#"><span id="prev">Prev</span></a> 
        <a href="#"><span id="next">Next</span></a>
    </div>
    </div>
  </div>
</div>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>