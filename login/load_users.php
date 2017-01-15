<?php
//Open the file, and load users into array's
$fp = fopen("users.txt", "a+") or exit("Unable to open file!");
$usernames = array();
$userpassword = array();
$usersname = array();
$usermail = array();
$userdate = array();
$usersection = array();
$userleader = array();
$usersn = 0;
while(!feof($fp))
{
	$line_of_text = fgets($fp);
	$stringparts = explode('|[&*&]|', $line_of_text);
	array_push($usernames, $stringparts[0]);
	array_push($userpassword, $stringparts[1]);
	array_push($usersname, $stringparts[2]);
	array_push($usermail, $stringparts[3]);
	array_push($userdate, $stringparts[4]);
	array_push($usersection, $stringparts[5]);
	array_push($userleader, $stringparts[6]);
	$usersn = $usersn + 1;
}
?>