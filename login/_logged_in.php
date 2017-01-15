<?php
session_start();
$loggedin = $_SESSION['logged_in'];
$uid = $_SESSION['u_id'];
$uname = $_SESSION['u_name'];
$uuname = $_SESSION['u_uname'];
$umail = $_SESSION['u_mail'];
$uadmin = $_SESSION['u_admin'];
$udate = $_SESSION['u_date'];
$usection = $_SESSION['u_section'];

if ($loggedin==true)
{
	echo '
	
	<div id="loggedin">
		<a id="home" href="/">
			<img height="90%" src="/imgs/home.png" />
		</a>
	';
	if ($uadmin==true)
	{
		echo '
		
		<a id="admin" href="/admin">
			<img height="90%" src="/imgs/admin.png" />
		</a>
		
		';
		
	}
	switch($usection)
		{
			case 1:
				echo '
					<a id="admin" href="/beavers">
						<img style="margin-top:4px;" height="80%" src="/imgs/sections/Beavers_Logo.gif" />
					</a>
					
					';
				break;
			case 2:	
				echo '
					<a id="admin" href="/cubs">
						<img style="margin-top:4px;" height="80%" src="/imgs/sections/Cubs_Logo.gif" />
					</a>
					
					';
				break;
			case 3:
				echo '
					<a id="admin" href="/scouts">
						<img style="margin-top:4px;" height="80%" src="/imgs/sections/Scouts_Logo.gif" />
					</a>
					
					';
				break;
			case 4:
				echo '
					<a id="admin" href="/venturers">
						<img style="margin-top:4px;" height="80%" src="/imgs/sections/Venturers_Logo.gif" />
					</a>
					
					';
				break;
			case 5:
				echo '
					<a id="admin" href="/rovers">
						<img style="margin-top:4px;" height="80%" src="/imgs/sections/Rovers_Logo.gif" />
					</a>
					
					';
				break;
			default:
				break;
		}
	echo '
		<p class="username sub-heading accent2c"> '. $uname .' ('. $uuname .')';
		
		switch($usection)
		{
			case 1:
				echo ' Beavers';
				break;
			case 2:	
				echo ' Cubs';
				break;
			case 3:
				echo ' Scouts';
				break;
			case 4:
				echo ' Venturers';
				break;
			case 5:
				echo ' Rovers';
				break;
			default:
				break;
		}
		
		echo '
		</p>
		<a href="/logout">
			<p class="logout sub-heading">Logout</p>
		</a>
	</div>
	
	';
}
else
{
	echo '
	
	
	
	';
}

?>