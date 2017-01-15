<?php
session_start();
$action = $_GET['action'];
$loggedin = $_SESSION['logged_in'];
$uid = $_SESSION['u_id'];
$uname = $_SESSION['u_name'];
$uuname = $_SESSION['u_uname'];
$umail = $_SESSION['u_mail'];
$uadmin = $_SESSION['u_admin'];
$udate = $_SESSION['u_date'];
$usection = $_SESSION['u_section'];
$uleader = $_SESSION['u_leader'];

if ($loggedin == True)
{
	echo '<div id="content" class="shadowb">';
	echo '
	
		<table border="0" id="user-info-table">
			<tr>
				<td colspan="2" class="heading center" style="border-bottom:8px solid #888888">User Information</td>
			</tr>
			<tr>
				<td style="text-align:right;border-right:8px solid #888888;">Name:</td>
				<td>'.$uname.'</td>
			</tr>
			<tr>
				<td style="text-align:right;border-right:8px solid #888888;">User ID:</td>
				<td>'.$uid.'</td>
			</tr>
			<tr>
				<td style="text-align:right;border-right:8px solid #888888;">Username:</td>
				<td>'.$uuname.'</td>
			</tr>
			<tr>
				<td style="text-align:right;border-right:8px solid #888888;">Email:</td>
				<td>'.$umail.'</td>
			</tr>
			<tr>
				<td style="text-align:right;border-right:8px solid #888888;">Member Since:</td>
				<td>'.$udate.'</td>
			</tr>
			<tr>
				<td style="text-align:right;border-right:8px solid #888888;">Status:</td>
				<td>'.$usection.'</td>
			</tr>
			<tr>
				<td style="text-align:right;border-right:8px solid #888888;">Leader:</td>
				<td>'; if ($uleader=="1"){echo "Yes";}else{echo "No";} echo '</td>
			</tr>
		</table>
	
	';
	echo '</div>';

}
else
{
	header("Location: /login");
}

?>