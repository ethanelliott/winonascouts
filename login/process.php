<?php
session_start();
include 'convert.php';
include 'load_users.php';
$loggedin = $_SESSION['logged_in'];
$uid = $_SESSION['u_id'];
$uname = $_SESSION['u_name'];
$uuname = $_SESSION['u_uname'];
$umail = $_SESSION['u_mail'];
$uadmin = $_SESSION['u_admin'];
$udate = $_SESSION['u_date'];
$usection = $_SESSION['u_section'];
$uleader = $_SESSION['u_leader'];

$usern =  $_POST["username"];
$passw =  $_POST["password"];

//encrypt username input
$encuserl = convert($usern,$key);

//search the "database" for the username
$truserid = array_search($encuserl, $usernames); 
//Load the password and name from the database, which match the username
$thisuser = array($usernames[$truserid], $userpassword[$truserid], $usersname[$truserid], $usermail[$truserid], $userdate[$truserid], $usersection[$truserid], $userleader[$truserid]);
//decrypt everything
$decryptpass=convert($thisuser[1],$key);
$decryptuser=convert($thisuser[0],$key);
$decryptname=convert($thisuser[2],$key);
$decryptmail=convert($thisuser[3],$key);
$registerDate = $thisuser[4];
$usersection = $thisuser[5];
$userleader = $thisuser[6];
 
if ($passw===$decryptpass and $usern===$decryptuser) //Check User credentials 
{
	$_SESSION['logged_in'] = true;
	$_SESSION['u_id'] = $truserid;
	$_SESSION['u_name'] = $decryptname;
	$_SESSION['u_uname'] = $decryptuser;
	$_SESSION['u_mail'] = $decryptmail;
	$_SESSION['u_date'] = $registerDate;
	$_SESSION['u_section'] = $usersection;
	$_SESSION['u_leader'] = $userleader;
	if ($truserid==0 OR $truserid==0 OR $truserid==0)
	{
		
		$_SESSION['u_admin'] = true;
	}
	else
	{
		$_SESSION['u_admin'] = false;
	}
	echo '
		<html>
		<body>
	';
	echo "<h1>Successfully Logged in!"."</h1><br>";
	echo "<h2>Redirecting...</h2>";
	echo '
		<META http-equiv="refresh" content="3;URL=/user">
		</body>
		</html>
	';
}
else //Login Failed
{
	$_SESSION['logged_in'] = false;
	$_SESSION['u_id'] = "";
	$_SESSION['u_name'] = "";
	$_SESSION['u_uname'] = "";
	$_SESSION['u_admin'] = false;
	$_SESSION['u_date'] = "";
	$_SESSION['u_section'] = 0;
	$_SESSION['u_leader'] = false;
	echo '
		<html>
		<body>
	';
	echo "<h1>Login Failed! Incorrect Username / Password"."</h1><br>";
	echo "<h2>Redirecting...</h2>";
	echo '
		<META http-equiv="refresh" content="3;URL=/login">
		</body>
		</html>
	';
}

?>