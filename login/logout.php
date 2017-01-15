<?php
session_start();

$_SESSION['logged_in'] = false;
$_SESSION['u_id'] = "";
$_SESSION['u_name'] = "";
$_SESSION['u_uname'] = "";
$_SESSION["u_mail"] = "";
$_SESSION["u_admin"] = false;
$_SESSION['u_date'] = "";
$_SESSION['u_section'] = 0;
$_SESSION['u_leader'] = false;

echo '
	<h1>Logged Out!!!</h1>
	<h2>Redirecting...</h2>
	<META http-equiv="refresh" content="3;URL=/login">
	</div>

	';
session_destroy();
?>