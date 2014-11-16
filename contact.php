<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/scripts/boonTools-class.php');

// init common variables
$POST = array();
$form = null;

foreach ($_POST as $key=>$val)
{
	$POST[$key] = strip_tags(trim($val));
}


//
// email is required to subscribe / unsubscribe
//
if (isset($POST['email']) && $POST['email'] != '') 
{
	//$db_addr = "localhost";
	//$db_name = "root";
	//$db_user = "root";
	//$db_pass = "password";

	//$db_link = mysql_connect($db_addr, $db_user, $db_pass) or die(mysql_error());
	//mysql_select_db($db_name, $db_link) or die(mysql_error());

	// init boonTools class (toolbox)
	$boonTools = new boonTools();

		// check that email is legit
	$valEmail = $boonTools->validateMail($POST['email']);
	if ($valEmail != '')
	{
		$formErr = '<div class="err">'.$valEmail.'</div>';
	}
	//
	// send message
	//
	else {		
	$msg = "E-MAIL SENT FROM Cederalandscapes.com\n";
	//$msg .= "RMA:\t$POST[$result]\n";
	$msg .="Name:\t$POST[name]\n";
	$msg .= "Email:\t$POST[email]\n";
	$msg .= "Message:\t$POST[message]\n";
	$to = "dave@cederalandscapes.com";
	//$to = "kyle@idahodaddy.org";
	$subject = "Message from Cederalandscapes";
	$mailheaders = "From: Cederalandscapes <dave@cederalandscapes.com>\n";
	$mailheaders = "Reply-To: $POST[email] \n";
	mail($to, $subject, $msg, $mailheaders);
	$formErr = '<div class="err">Your Message has been sent Successfully.</div>';
	}


}
	if (isset($POST['email']) && $POST['email'] == "")
			{
				$formErr = '<div class="err">Please enter an email address before submitting.</div>';
			}


//
// if form is null, then create the form - otherwise just use the result
// note: the formErr and auto populate sent email_addr below...(shorthand if statements) 
// 		 if it exists then it will print it - otherwise leaves empty
//
if (empty($form))
{
	$form = '
			<form class="form" method=POST action="'.$_SERVER['PHP_SELF'].'">
				<fieldset class="formField">
            	<legend>Send us a message</legend>
                	<table>
                    	<tr><td><label>Name:</label></td><td><input type="text" class="txt" id="name" name="name" size="50" /></td></tr>                        <tr><td><label>Email:</label></td><td><input type="text" class="txt" id="email" name="email" size="50" /></td></tr>
                        <tr><td><label>Message:</label></td><td><textarea name="message" id="message" cols="48" rows="5" class="txt"></textarea></td></tr>
                    </table>
					'.((isset($formErr) && $formErr != '') ? $formErr : '').'
                    <input type="submit" value="Submit" name="Submit!" />
            </fieldset>
        </form>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php $site_url ?>/css/layout.css" />
<meta name="description" content="Cedera Landscapes - Creating high quality landscapes and exceeding customer expectations since 2005 - Send us an email or give is a call to schedule your free estimate today! " />
<meta name="keywords" content="cedera, landscapes, cederalandscapes, lawn care, lawn maintenance, lawn, lawns, snow removal, sprinkler systems, install sprinkler systems, cedera landscapes, cedera land scapes, swan valley, swanvalley, cedera lanscapes in swan valley idaho" />
<title>Cedera Landscapes, LLC - Contact</title>
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
  <h3>Cedera Landscapes</h3>
    <h3>David McClure</h3>
    Cell: 208.709.1985<br />
    Office: 208.483.2085<br />
    Fax: 208.483.2086</p>
    State Hwy 31 Mile 96<br />
    PO Box 181<br />
    <p>Swan Valley, ID 83449.</p>
  <h4><a href="mailto:dave@cederalandscapes.com">Dave@CederaLandscapes.com</a></h4>
    </div>
    <!-- right contains the right div information-->
    <div id="right">
    <div style="float:left;"><img class="drop-shadow-image" src="<?php $site_url ?>/layout/contact.jpg" /></div>
    <div class="text" style="clear:both;">
      <?php print $form; ?>
    </div>
    </div>
  </div>
</div>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>