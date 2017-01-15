<?php
$namer =  $_POST["rname"];
$userr =  $_POST["rusername"];
$passr =  $_POST["rpassword"];
$mailr =  $_POST["rmail"];
$sectionr =  $_POST["rsection"]; //Section Variable
$leaderr =  $_POST["rleader"]; //leader Variable
$leadcoder =  $_POST["rleadcode"]; //leader_code Variable
$leader_Code = "1st!winona!rocks!";

include 'convert.php';
include 'load_users.php';

if ($leaderr=="leader" and $leadecoder==$leader_Code)
{
	$leaderr = "1";
}
else
{
	$leaderr = "0";
}

if ($namer!=NULL and $userr!=NULL and $passr!=NULL and $mailr!=NULL and $sectionr!=NULL)
{

$users = convert($userr,$key);

if (array_search($users, $usernames)===false)
{
	echo '
		<html>
		<body>
	';
	echo "<h1>Username available!"."</h1><br>";
	echo "<h2>Registration successful</h2><br>";
	echo "<h2>Redirecting...</h2>";
	echo "";
	$encpassr=convert($passr,$key); 
	$encuserr=convert($userr,$key); 
	$encnamer=convert($namer,$key); 
	$encmailr=convert($mailr,$key); 
	$subject = "Registration at 1stWinona.ca";
	$message = '
	
	<html>
<head>
<style>
body {
	padding:50px;
	margin:0;
	background:#000000;
	color:#FFFFFF;
	font-family:Arial, sans-serif;
}
#header {
	width:100%;
	margin:auto auto;
	
}
#content {
	width:94%;
	background:#DDDDDD;
	margin:auto auto;
	text-align:left;
	padding:10px;
}
.logo {
	text-align:center;
	font-size:50px;
}
.text {
	font-size:16px;
	color:#000000;
}
</style>
</head>
<body>
<div id="header">
<h1 class="logo">
Ethan Elliott .ca
</h1>
</div>
<div id="content">
<p class="text">
Dear '.$namer.',<br /><br />
Thank-you for registering at 1stWinona.ca!<br />
Your account is up and ready to go!<br /><br />
Username: ' . $userr . '<br />
Password: ' . $passr . '<br /><br />
Head on over to <a href="http://www.1stwinona.ca/login">1stwinona.ca/login</a> , to login to your account.<br /><br />
Sincerely, <br />
&emsp;&emsp;&emsp;1st Winona Admin<br />
</p>
</div>
</body>
</html>
	
	';
	$headers = 'From: admin@ethanelliott.ca' . "\r\n" . 'Reply-To: admin@ethanelliott.ca';
	$headers.= "MIME-version: 1.0\n";
	$headers.= "Content-type: text/html; charset= iso-8859-1\n";
	mail($mailr,$subject,$message,$headers);
	$dater = date('l F jS Y \:: h:i:s A');
	$datar = PHP_EOL . $encuserr . "|[&*&]|" . $encpassr . "|[&*&]|" . $encnamer . "|[&*&]|" . $encmailr . "|[&*&]|" . $dater . "|[&*&]|" . $sectionr . "|[&*&]|" . $leaderr;
	fwrite($fp, $datar);
	echo '
		<META http-equiv="refresh" content="3;URL=/login">
		</body>
		</html>
	';
}
else
{
	echo '
		<html>
		<body>
	';
	echo "<h1>Username not available"."</h1><br>";
	echo "<h2>Registration failed, try again</h2><br>";
	echo "<h2>Redirecting...</h2>";
	echo '
		<META http-equiv="refresh" content="3;URL=/register">
		</body>
		</html>
	';
}
}
else
{
	echo '
		<html>
		<body>
	';
	echo "<h1>Registration failed, try again</h1><br>";
	echo "<h2>Please fill in <b>ALL</b> fields</h2><br>";
	echo "<h2>Redirecting...</h2>";
	echo '
		<META http-equiv="refresh" content="3;URL=/register">
		</body>
		</html>
	';
}

?>