<?php
    // variables start
	$name = "";
	$email = "";
	$message = "";
	
	$name =  trim($_POST['name']);
	$email =  trim($_POST['email']);
	$message =  trim($_POST['name2']) + trim($_POST['message']);

	// variables end
	
	// email address starts
	$emailAddress = 'trinixstudio@gmail.com';
	// email address ends
	
	$subject = "Message From: $name";	
	$message = "<strong>From:</strong> $name <br/><br/> <strong>Message:</strong> $message";
	
	$headers .= 'From: '. $name . '<' . $email . '>' . "\r\n";
	$headers .= 'Reply-To: ' . $email . "\r\n";
	
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	//send email function starts
	mail($emailAddress, $subject, $message, $headers);
	//send email function ends
?>