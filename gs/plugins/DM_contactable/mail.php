<?php
	define('IN_GS', TRUE);
	include "../../admin/inc/basic.php";
	
	if (file_exists('../../data/other/contactable.xml')) {
			$x = getXML('../../data/other/contactable.xml');
			$ct_emailaddr = $x->emailaddr; 
			$ct_emailsubject = $x->emailsubject;
	}
	
	//declare our assets 
	$name = stripcslashes($_POST['name']);
	$emailAddr = stripcslashes($_POST['email']);
	$comment = stripcslashes($_POST['comment']);
	$subject = $ct_emailsubject;	
	$contactMessage = "Message: $comment \r \n From: $name \r \n Reply to: $emailAddr";
	$headers = "From:$emailAddr\r\nReply-to:$emailAddr"; 
	//validate the email address on the server side
	if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $emailAddr) ) {
		//if successful lets send the message
		mail($ct_emailaddr, $subject, $contactMessage,$headers);
		echo('success'); //return success callback
	} else {
		echo('failed'); //email was not valid
	}
?>
