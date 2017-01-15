<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php function getPath(){$xpath = $_SERVER['DOCUMENT_ROOT'];if (strpos($xpath, 'A:/wamp/www') !== false){$filepath = "A:/wamp/www";return $filepath;}else{$filpath = "/home/a5392683/public_html";return $filpath;}}?>
	<?php $path = getPath();$path .= "/parts/htmlhead.php";include_once($path);?>
	<title>1st Winona | Contact</title>
</head>
<body onload="loadPage();">
	<?php $path = getPath();$path .= "/login/_logged_in.php";include_once($path);?>
<div id="page-container">
	<div id="header">
		<div id="header-container">
			<?php $path = getPath();$path .= "/parts/header.php";include_once($path);?>
			<?php $path = getPath();$path .= "/parts/menu.php";include_once($path);?>
		</div>
	</div>
	<div id="content-container">
	<?php
		$notify_injections = true;							//set to false if you don't want to e-mail yourself
															//with notifications of e-mail injection attempts
		$mail_target = 'admin@1stwinona.tk';						//specify your e-mail address here
		$mail = array('sender' => @$_POST['sender'],					//retrieve POSTed form field data - should match the
			'sender_name' => @$_POST['sender_name'],				//names of the various fields in the <FORM> below
			'subject' => @$_POST['subject']);
		$mail_message = @$_POST['message'];

		function validate_mail($field, $mail_header) {
		//	$mail_header = "a\rBcc:spoof1\rTo:spoof2";				//used for testing the validate_mail function; see docs
			$alert = '';
			if (@preg_match_all("/(\r|\n)([^:]+):/", $mail_header, $m)) foreach($m[0] as $v) $alert .= '<span style="width:100px;font:bold">'.$field.'</span>'.$v.'<br>';			//check for invalid header data
			return $alert;
		}
		echo '<style>
		</style>
		<p>';
		$show_form = true;								//by default, show the HTML <FORM>
		if ($mail_message != '') {							//if a message has been left, do the following:
			$alert = '';
			foreach ($mail as $k => $v) $alert .= validate_mail($k, $v);		//validate each mail header
			if ($alert != '') {
				if ($notify_injections == true) $mail_result = @mail($mail_target, 'E-mail insertion attack', '<html><body>E-mail injection attempted via header insertion<p><span style="width:100px;font:bold">Remote IP</span>'.@$_SERVER['REMOTE_ADDR'].'<br><span style="width:100px;font:bold">Remote Host</span>'.@$_SERVER['REMOTE_HOST'].'<p><span style="width:100px;text-decoration:underline">form-field</span><u>injected header</u><br>'.$alert.'</body></html>');
				if ($mail_result == 1) {					//thank them for their submission - you don't want to let
					echo 'Your comments have been submitted. Thank you.';	//them know you're aware of their attack, do you?
					$show_form = false;					//and after submission, you need not re-display the form
				}
				else echo 'Unknown error: mail not sent. Please try again.';
			}
			else if (!preg_match("/^[A-Z0-9._%-]+@[A-Z0-9][A-Z0-9.-]{0,61}[A-Z0-9]\.[A-Z]{2,6}$/i", $mail['sender'])) echo '<span class="alert">* A valid e-mail address is required for your comments to be registered *</span>';
			//validate e-mail address - described in accompanying docs
			else if ($mail['sender'] == '' or $mail['sender_name'] == '') echo '<span class="alert">* You must enter your comments and a name and e-mail address for your comments to be registered *</span>';

			else {
				$mail_result = @mail($mail_target, $mail['subject'], $mail_message, "From: $mail[sender_name] <$mail[sender]>");
				if ($mail_result == 1) {					//mail function here works as above
					echo 'Your comments have been submitted. Thank you.';
					$show_form = false;
				}
				else echo 'Unknown error: mail not sent. Please try again.';
			}
		}
		else echo '';
		if ($show_form == true) echo '<p><form action="'.$_SERVER['PHP_SELF'].'" method="post">
		<table class="form_table"><tr><td style="padding:0 15px 0 0">Name:<br>
		<input name="sender_name" type="text" maxlength="50" value="'.$uname.'" class="short_input"></td>

		<td>E-mail Address:<br>
		<input name="sender" type="text" maxlength="50" value="'.$umail.'" class="short_input"></td></tr>

		<tr><td colspan=2><p>Subject:<br>
		<input name="subject" type="text" maxlength="50" value="" class="long_input">

		<p>Comments:<br>
		<textarea name="message" rows="10" class="message_box"></textarea>

		<p><input type="submit" name="submit" value="Submit" class="submit">
		</td></tr></table>
		</form>';
	?>
	</div>
	<div id="footer">
		<?php $path = getPath();$path .= "/parts/footer.php";include_once($path);?>
	</div>
</div>
</body>
</html>