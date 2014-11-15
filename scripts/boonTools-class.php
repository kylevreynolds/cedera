<?php

class boonTools {

	// default constructor
	function __construct()
	{
	}
	
	// default destructor
	function __destruct()
	{
	}
	
		
	function emailRec() {
		//first validate email address
		$validateError = $this->validateMail($_POST['email']);
		if ( $validateError != '' ) {
			echo "failure|" . $validateError;
			die;
		}
		
		//user defined configutation
		include 'config.php';
		$email = $EmailRegistrationTo;
		$EmailRegistrationTo = '';

		$emailRegFrom = $EmailRegistrationFrom;
		$EmailRegistrationFrom = '';

		$emailRegSubj = $EmailRegistrationSubj;
		$EmailRegistrationSubj = '';

		if ( strtolower($Use_Outlook_2007_Compat) == "yes" ) {
			include '../registration-email-outlook.php';
		} else { include '../registration-email.php'; }

		$subj = $emailRegSubj;
		
		$hdrs = 'MIME-Version: 1.0' . "\r\n";
		$hdrs .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		$hdrs .= "From: " . $emailRegFrom . "\r\n";

		//send the message...
		
		if ( mail($email, $subj, $output_page, $hdrs) ) {
			$sReturn = "success|" . $_POST['fname'] . " " . $_POST['lname'] . ", thank you for registering your product with us.";
		} else {
			$sReturn = "failure|There was a server problem sending the message.";
		}

		echo $sReturn;
	}
		
	function validateMail($email) {
		$validationError = '';
		if ( preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $email) ) {
			list($tmp,$domain)=explode('@',$email);
			unset($tmp);
			$domain = strtolower(trim($domain));

			if(!checkdnsrr($domain,'MX')) {		  										
				$validationOK = false;
				$validationError = 'The email address contains an invalid domain.';
			} else {
				$validationError = $this->chkEmailBlacklist(trim($email), trim($domain));
				if ($validationError != "") {
					$validationError = '<font size="-5">' . $validationError . '</font>';
					$validationOK = false; 
				}
			}
		} else { $validationError = 'The entered email address is invalid.'; }
				
		//return the result to calling function validateMail
		return $validationError;
	}
	
	/////////////
	// Blacklist lookup... Queries multiple black lists
	function dnsblqueryUnix($ip) {
		$dnsbllist = array();
		$dnsbllist[0] = "bl.spamcop.net";
		$dnsbllist[1] = "dnsbl.sorbs.net";
		
		if ($ip) {
			// Reverses the IP
			$ips = explode(".", $ip);
			$ipreverse = "$ips[3].$ips[2].$ips[1].$ips[0]";
			// Queries the block lists listed in dnsbllist
			for ($i=0;$i<count($dnsbllist);$i++) {
				if (checkdnsrr("$ipreverse.$dnsbllist[$i]", "A")) {
					// Returns the blacklist the queried IP is on
					return $dnsbllist[$i];
				}
			}
		}
		return false;
	}
	
	/////////////
	// Blacklisted by StopForumsSpam
	function chkStopForumsSpam($email) {
		# example url: http://www.stopforumspam.com/api?email=g2fsehis5e@mail.ru 
		$url = "http://www.stopforumspam.com/api?email=$email";
		
		$xml = new SimpleXMLElement(file_get_contents($url));	
		return $xml->appears;	
	}
	
	function chkEmailBlacklist($email, $domain) {
		# check if email is blacklisted on spamhaus, sorbs, spamcop, etc.
		$validationError = '';
		$numofipchks = 1;
	
		getmxrr($domain, $mx_records);
		
		foreach ($mx_records as $val) {
			$ipval = gethostbyname($val);
			$blacklist = $this->dnsblqueryUnix($ipval);				
	
			if ($blacklist != '') {
				$validationError = "Email blacklisted by $blacklist.";
				break;
			}
			if ($numofipchks == 3) {
				break;
			} else { $numofipchks++; }
		}
		unset ($val);
					
		# look in boondockers supplemental blacklist file - blacklist.txt
		# entries in blacklist file are... 
		#		specific email addr: 	joe@foo.com
		#		entire email domain: 	@foo.com
		# Note, a line feed (enter) needed at the end of blacklist.txt file.
		$fn = 'blacklist.txt';
		if (file_exists($fn))
		{
			$blacklist = file($fn);
			
			foreach ($blacklist as $val) {
				$val = trim($val);
				if (substr($val, 0, 1) == '@') {
			  		if (substr($val,1) == trim($domain)) {
						$validationError = "The email address is blacklisted by BlackOps.";
						break;
			  		}						
				} else {
			  		if ($val == $email) {
						$validationError = "The email address domain is blacklisted by BlackOps.";
						break;
			  		}						
				}
			}
			unset ($val);
		}
		else {
			return '';
		}
					
		# check with StopForumsSpam
		//if ($this->chkStopForumsSpam($email) == "yes") {
		//	$validationError = "Email blacklisted by StopForumsSpam.com.";
		//}
	
		return $validationError;
	}
	
	
	//ok for textareas that use line feeds
	function deployHTMLsafe($output_page) {
		$output_page = str_replace('    ',"",ereg_replace("(\t)","",$output_page));
		echo $output_page;
		die;
	}
	
	function deployHTMLex($output_page) {
		$output_page = str_replace('    ',"",ereg_replace("(\r|\n|\t)","",$output_page));
		echo $output_page;
		die;
	}
}

?>