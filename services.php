<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php $site_url ?>/css/layout.css" />
<meta name="description" content="Cedera Landscapes - Creating high quality landscapes and exceeding customer expectations since 2005. Cedera Landscapes offers a full line of lawn care and snow removal services" />
<meta name="keywords" content="cedera, landscapes, cederalandscapes, lawn care, lawn maintenance, lawn, lawns, snow removal, sprinkler systems, install sprinkler systems, cedera landscapes, cedera land scapes, swan valley, swanvalley, cedera lanscapes in swan valley idaho" />
<title>Cedera Landscapes, LLC- Services</title>
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
      <h1>Services</h1>
      	<ul>
        	<li><a href="services.php#landscape">Landscape  Construction</a></li>
            <li><a href="services.php#sprinkler">Sprinkler  Systems (Hunter)</a></li>
            <li><a href="services.php#lawn">Lawn  Maintenance</a></li>
            <li><a href="services.php#trees">Trees  &amp; Shrubs</a></li>
            <li><a href="services.php#snow">Snow  Removal</a></li>
        </ul>      
    </div>
    <!-- right contains the right div information-->
    <div id="right">
      <h2>Landscape  Construction</h2>
      <h3 id="landscape">Custom Landscape CAD Design</h3>
        <ul>
        	<li>Skidsteer Loader Work- Site prep,  final grading, rock removal, trenching, 9'',24'',36''auger</li>
        	<li>Tree, Shrub, Perennial, Annual  Planting</li>
        	<li>Flagstone Walkways/Patios</li>
        	<li>Firepits</li>
        	<li>Steel Edging</li>
        	<li>Ground Covers-Bark, Decorative Rock,  Rubber Mulch</li>
        	<li>Boulder Retaining Walls</li>
        	<li>Block Retaining Walls</li>
        	<li>Water Falls, Streams, Ponds,  Fountains</li>
        	<li>Outdoor Kitchens</li>
        	<li>Playgrounds</li>
        	<li>Landscape Lighting</li>
        	<li>Mini-Excavator Trenching, Water  lines, Excavation, etc.</li>
        	<li>Fencing</li>
         </ul>
      <h3 id="sprinkler">Sprinkler  Systems (Hunter)</h3>
        <ul>
            <li>Design</li>
        	<li>Installation</li>
       		<li>Maintenance</li>
        	<li>Repair</li>
        	<li>Spring Activation</li>
        	<li>Winterization</li>
        </ul>
      <h3 id="lawn">Lawn  Maintenance</h3>
      	<ul>
      		<li>Weekly Lawn Mowing</li>
        	<li>Aeration</li>
        	<li>Power Raking</li>
        	<li>Lawn Fertilization</li>
        	<li>Weed Spraying</li>
        	<li>Field Mowing</li>
		</ul>
      <h3 id="trees">Trees  &amp; Shrubs</h3>
      	<ul>
      		<li>Pest Control</li>
        	<li>Pruning</li>
        	<li>Fertilization</li>
        	<li>Tree Moving</li>
        	<li>Retail Tree Sales and Delivery</li>
        </ul>
      <h3 id="snow">Snow  Removal</h3>
    </div>
  </div>
</div>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>