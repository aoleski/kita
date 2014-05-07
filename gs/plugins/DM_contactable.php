<?php
/*
* Plugin Name: Contactable Email form Plugin for GS
* Description: Adds Contactable Email form.  
* Version: 1.0
* Author: Mike Swan
* Author URI: http://www.digimute.com/
* 
* Original Contactable 
* Copyright (c) 2009 Philip Beel (http://www.theodin.co.uk/)
* Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) 
* and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.Contactable 
*/

# get correct id for plugin
$thisfile_contactable=basename(__FILE__, ".php");
$DM_contactable_config_file=GSDATAOTHERPATH .'contactable.xml';



# register plugin
register_plugin(
	$thisfile_contactable, 							# ID of plugin, should be filename minus php
	'Contactable Email Form GS Plugin', 			# Title of plugin
	'1.9', 											# Version of plugin
	'Mike Swan',									# Author of plugin
	'http://www.digimute.com/', 					# Author URL
	'Contactable Email Form GS Plugin', 			# Plugin Description
	'theme', 										# Page type of plugin
	'DM_contactable_show'							# Function that displays content
);

# Load in the scripts and styles required for the plugin
add_action('index-pretemplate','DM_contactable_doheader',array());
add_action('theme-header','contactableInit',array());

# get XML data, use defaults if the file does not exist on the first run. 
if (file_exists($DM_contactable_config_file)) {
	$x = getXML($DM_contactable_config_file);
	$ct_emailaddr = $x->emailaddr;
	$ct_emailsubject = $x->emailsubject;
	$ct_name = $x->name;
	$ct_email = $x->email;
	$ct_message = $x->message;
	$ct_recievedMsg = $x->recievedmsg;
	$ct_notRecievedMsg = $x->notrecievedmsg;
	$ct_disclaimer = $x->disclaimer;
	$ct_hideOnSubmit = $x->hideonsubmit;
	$ct_language=$x->language;
} else {
	$ct_emailaddr = '';
	$ct_language='en_US';
	$ct_emailsubject = 'New Web Enquiry';
	$ct_name = 'Name';
	$ct_email = 'Email';
	$ct_message = 'Message';
	$ct_recievedMsg = 'Thank you for your message';
	$ct_notRecievedMsg = 'Sorry but your message could not be sent, try again later';
	$ct_disclaimer = '';
	$ct_hideOnSubmit = true;
	$xml = @new SimpleXMLElement('<item></item>');
	$xml->addChild('emailaddr', $ct_emailaddr);
	$xml->addChild('language', $ct_language);
	$xml->addChild('emailsubject', $ct_emailsubject);
	$xml->addChild('name', $ct_name);
	$xml->addChild('email', $ct_email);
	$xml->addChild('message', stripcslashes($ct_message));
    $xml->addChild('recievedmsg', stripcslashes($ct_recievedMsg));
    $xml->addChild('notrecievedmsg', stripcslashes($ct_notRecievedMsg));
    $xml->addChild('disclaimer', stripcslashes($ct_disclaimer));
    $xml->addChild('hideonsubmit', $ct_hideOnSubmit);
	$xml->asXML($DM_contactable_config_file);
}

# add in this plugin's language file
i18n_merge($thisfile_contactable,$ct_language);

# Add a sidebar menu item to the "theme" admin page
add_action('theme-sidebar','createSideMenu',array($thisfile_contactable, i18n_r($thisfile_contactable.'/CONTACTABLE_TITLE'))); 

function contactableInit(){
	global $thisfile_contactable,$ct_name,$ct_email,$ct_message,$ct_language,$ct_emailsubject,$ct_subject,$ct_recievedMsg,$ct_disclaimer,$ct_notRecievedMsg,$ct_hideOnSubmit;
	
	echo '<script type="text/javascript">window.onload = function() {
	$("<div id=\'contact\'> </div>").appendTo("body");
	$("#contact").contactable({
	 		name: "'.$ct_name.'",
			email: "'.$ct_email.'",
			message : "'.$ct_message.'",
			subject : "'.$ct_emailsubject.'",
			recievedMsg : "'.$ct_recievedMsg.'",
			notRecievedMsg : "'.$ct_notRecievedMsg.'",
			disclaimer : "'.$ct_disclaimer.'",
			hideOnSubmit: "'.$ct_hideOnSubmit.'"
	 });		

	}</script>';
}

/**
 * Contactable Do Header
 *
 * Registers the required Javascripts and Styles required for the plugin
 * These are setup before the template header is loaded so the get_header call will load them
 * 
 * @since 1.0
 *
 */
function DM_contactable_doheader(){
	global $SITEURL;
	register_script('contactable',$SITEURL.'plugins/DM_contactable/js/jquery.contactable.js', '1.2.1', FALSE);
	register_script('contactable-validate', $SITEURL.'plugins/DM_contactable/js/jquery.validate.pack.js', '1.5.1', FALSE);
	register_style('contactable-css',$SITEURL.'plugins/DM_contactable/css/contactable.css','1.2.1','screen');
		
	queue_script('jquery', GSFRONT);
	queue_script('contactable', GSFRONT);
	queue_script('contactable-validate', GSFRONT);
	queue_style('contactable-css', GSFRONT);
}


/**
 * Contactable Show Form
 *
 * Takes care of the form when submitted saving the to the configuration XML file. 
 * Form is then displayed with all the saved values. 
 * 
 * @since 1.0
 *
 */
function DM_contactable_show() {
	global $DM_contactable_config_file, $thisfile_contactable,$ct_language, $ct_emailaddr, $ct_name,$ct_email,$ct_message, $ct_recievedMsg, $ct_notRecievedMsg, $ct_disclaimer,$ct_hideOnSubmit, $ct_emailsubject ;
	$success=null;$error=null;
	
	// submitted form
	if (isset($_POST['submit'])) {		
		$ct_emailaddr = isset($_POST['emailaddr']) ? $_POST['emailaddr'] : $ct_emailaddr;
		$ct_language = isset($_POST['language']) ? $_POST['language'] : $ct_language;
		$ct_emailsubject = isset($_POST['emailsubject']) ? $_POST['emailsubject'] : $ct_emailsubject;	
		$ct_name = isset($_POST['name']) ? $_POST['name'] : $ct_name;
		$ct_email = isset($_POST['email']) ? $_POST['email'] : $ct_email;
		$ct_message = isset($_POST['message']) ? $_POST['message'] : $ct_message;
		$ct_recievedMsg = isset($_POST['recievedmsg']) ? $_POST['recievedmsg'] : $ct_recievedMsg;
		$ct_notRecievedMsg = isset($_POST['notrecievedmsg']) ? $_POST['notrecievedmsg'] : $ct_notRecievedMsg;
		$ct_disclaimer = isset($_POST['disclaimer']) ? $_POST['disclaimer'] : $ct_disclaimer;
		$ct_hideOnSubmit = isset($_POST['hideonsubmit']) ? $_POST['hideonsubmit'] : $ct_hideOnSubmit;
		# if there are no errors, Save data
		if (!$error) {
			$xml = @new SimpleXMLElement('<item></item>');
			$xml->addChild('emailaddr', $ct_emailaddr);
			$xml->addChild('language', $ct_language);
			$xml->addChild('emailsubject', $ct_emailsubject);
			$xml->addChild('name', $ct_name);
			$xml->addChild('email', $ct_email);
			$xml->addChild('message', stripcslashes($ct_message));
            $xml->addChild('recievedmsg', stripcslashes($ct_recievedMsg));
            $xml->addChild('notrecievedmsg', stripcslashes($ct_notRecievedMsg));
            $xml->addChild('disclaimer', stripcslashes($ct_disclaimer));
			$xml->addChild('hideonsubmit', $ct_hideOnSubmit);
			
			if (! $xml->asXML($DM_contactable_config_file)) {
				$error = i18n_r('CHMOD_ERROR');
			} else {
				$x = getXML($DM_contactable_config_file);
				$ct_emailaddr = $x->emailaddr; 
				$ct_language = $x->language;
				$ct_emailsubject = $x->emailsubject;
				$ct_name = $x->name;
				$ct_email = $x->email;
				$ct_message = $x->message;
				$ct_recievedMsg = $x->recievedmsg;
				$ct_notRecievedMsg = $x->notrecievedmsg;
				$ct_disclaimer = $x->disclaimer;
				$ct_hideOnSubmit = $x->hideonsubmit;
				$success = i18n_r('SETTINGS_UPDATED');
			}
		}
	}
	
	?>
	<h3><?php i18n($thisfile_contactable.'/CONTACTABLE_EMAILTITLE'); ?></h3>
	
	<?php 
	if($success) { 
		echo '<p style="color:#669933;"><b>'. $success .'</b></p>';
	} 
	if($error) { 
		echo '<p style="color:#cc0000;"><b>'. $error .'</b></p>';
	}
	?>
	
	<form method="post" action="<?php	echo $_SERVER ['REQUEST_URI']?>">
		<p><label for="emailaddr" ><?php i18n($thisfile_contactable.'/CONTACTABLE_EMAILADDR'); ?></label><input id="emailaddr" name="emailaddr" class="text" value="<?php echo $ct_emailaddr; ?>" /></p>
		<p><label for="emailsubject" ><?php i18n($thisfile_contactable.'/CONTACTABLE_EMAILSUBJECT'); ?></label><input id="emailsubject" name="emailsubject" class="text" value="<?php echo $ct_emailsubject; ?>" /></p>
		<p><label for="language" ><?php i18n($thisfile_contactable.'/CONTACTABLE_LANGUAGE'); ?></label><input id="language" name="language" class="text" value="<?php echo $ct_language; ?>" /></p>
		<h3><?php i18n($thisfile_contactable.'/CONTACTABLE_TITLE'); ?></h3>
		<p><label for="name" ><?php i18n($thisfile_contactable.'/CONTACTABLE_NAME'); ?></label><input id="name" name="name" class="text" value="<?php echo $ct_name; ?>" /></p>
		<p><label for="email" ><?php i18n($thisfile_contactable.'/CONTACTABLE_EMAIL'); ?></label><input id="email" name="email" class="text" value="<?php echo $ct_email; ?>" /></p>
		<p><label for="message" ><?php i18n($thisfile_contactable.'/CONTACTABLE_MESSAGE'); ?></label><input id="message" name="message" class="text" value="<?php echo $ct_message; ?>" /></p>
		<p><label for="recievedmsg" ><?php i18n($thisfile_contactable.'/CONTACTABLE_RECIEVEDMSG'); ?></label><input id="recievedmsg" name="recievedmsg" class="text" value="<?php echo $ct_recievedMsg; ?>" /></p>
		<p><label for="notrecievedmsg" ><?php i18n($thisfile_contactable.'/CONTACTABLE_NOTRECIEVEDMSG'); ?></label><input id="notrecievedmsg" name="notrecievedmsg" class="text" value="<?php echo $ct_notRecievedMsg; ?>" /></p>
		<p><label for="disclaimer" ><?php i18n($thisfile_contactable.'/CONTACTABLE_DISCLAIMER'); ?></label><input id="disclaimer" name="disclaimer" class="text" value="<?php echo $ct_disclaimer; ?>" /></p>
		<p><label for="hideOnSubmit" ><?php i18n($thisfile_contactable.'/CONTACTABLE_HIDEONSUBMIT'); ?></label><select name="hideonsubmit"><option value="true"><?php i18n($thisfile_contactable.'/CONTACTABLE_HIDEONSUBMIT_YES'); ?><option  value="false"><?php i18n($thisfile_contactable.'/CONTACTABLE_HIDEONSUBMIT_NO'); ?></select></p>
		<p><input type="submit" id="submit" class="submit" value="<?php i18n('BTN_SAVESETTINGS'); ?>" name="submit" /></p>
	</form>
	<?php
}

