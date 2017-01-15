<?php
session_start();
$action = $_GET['action'];
$loggedin = $_SESSION['logged_in'];
$uid = $_SESSION['u_id'];
$uname = $_SESSION['u_name'];
$uuname = $_SESSION['u_uname'];
$umail = $_SESSION['u_mail'];
$udate = $_SESSION['u_date'];
$usection = $_SESSION['u_section'];
$uleader = $_SESSION['u_leader'];

echo '<div id="content">';

if ($action=="register" and $loggedin!=true)
{
	echo'
		<style>
		.txtinput {
			font-size:18px;
			width:80%;
			padding:10px 20px;
			border:1px solid #888888;
			-moz-box-shadow: 0px 0px 0px #8F2B94;
			-webkit-box-shadow: 0px 0px 0px #8F2B94;
			box-shadow: 0px 0px 0px #8F2B94;
			transition:all 0.5s;
			-webkit-transition:all 0.5s;
		}
		.txtinput:hover {
			-moz-box-shadow: 0px 0px 10px #8F2B94;
			-webkit-box-shadow: 0px 0px 10px #8F2B94;
			box-shadow: 0px 0px 10px #8F2B94;
			transition:all 0.5s;
			-webkit-transition:all 0.5s;
		}
		.txtinput:focus {
			-moz-box-shadow: 0px 0px 20px #8F2B94;
			-webkit-box-shadow: 0px 0px 20px #8F2B94;
			box-shadow: 0px 0px 20px #8F2B94;
			transition:all 0.5s;
			-webkit-transition:all 0.5s;
		}
		td {
			padding:8px 20px;
		}
		</style>
			<table border="0" style="width:100%;">
				<form class="registerfrm" action="/registernow" method="post">
				<tr>
					<td colspan="2"><p class="heading center">Register</p></td>
				</tr>
				<tr>
					<td style="width:20%;text-align:right;">Name</td>
					<td style="width:80%;text-align:left;"><input type="text" maxlength="50" name="rname" class="txtinput"></td>
				</tr>
				<tr>
					<td style="width:20%;text-align:right;">Email</td>
					<td style="width:80%;text-align:left;"><input type="text" maxlength="50" name="rmail" class="txtinput"></td>
				</tr>
				<tr>
					<td style="width:20%;text-align:right;">Username</td> 
					<td style="width:80%;text-align:left;"><input type="text" maxlength="50" name="rusername" class="txtinput"></td>
				</tr>
				<tr>
					<td style="width:20%;text-align:right;">Password</td>
					<td style="width:80%;text-align:left;"><input type="password" maxlength="50" name="rpassword" class="txtinput"></td>
				</tr>
				<tr>
					<td style="width:20%;text-align:right;">Section</td>
					<td style="width:80%;text-align:left;">
						<select name="rsection">
							<option value="1">Beavers</option>
							<option value="2">Cubs</option>
							<option value="3">Scouts</option>
							<option value="4">Venturers</option>
							<option value="5">Rovers</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="width:20%;text-align:right;">Leader</td>
					<td style="width:80%;text-align:left;">
						<script>
						var visix = 0;
						function ShowCodeBox()
						{
							if (visix==0)
							{
								document.getElementById("hideLeadCodeBox").style.display="table-row"
								visix = 1;
							}
							else
							{
								document.getElementById("hideLeadCodeBox").style.display="none"
								visix = 0;
							}
						}
						</script>
						<input type="checkbox" onchange="ShowCodeBox()" style="transition:all 1s;" name="rleader" value="leader">  I am a Leader<br>
					</td>
				</tr>
				<tr id="hideLeadCodeBox" style="display:none;">
					<td style="width:20%;text-align:right;">Leader Code</td>
					<td colspan="2" style="text-align:left;"><input type="text" maxlength="50" name="rleadcode" class="txtinput"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center;"><input class="button" type="submit"></td>
				</tr>
				</form>
			</table>
	';
}
else
{

if ($loggedin==true)
{
echo '<META http-equiv="refresh" content="0;URL=/user" />';
}
elseif ($loggedin==false)
{
echo '
	<style>
	table {
		width:100%;
	}
	.txtinput {
			font-size:18px;
			width:80%;
			padding:10px 20px;
			border:1px solid #888888;
			-moz-box-shadow: 0px 0px 0px #8F2B94;
			-webkit-box-shadow: 0px 0px 0px #8F2B94;
			box-shadow: 0px 0px 0px #8F2B94;
			transition:all 0.5s;
			-webkit-transition:all 0.5s;
		}
		.txtinput:hover {
			-moz-box-shadow: 0px 0px 10px #8F2B94;
			-webkit-box-shadow: 0px 0px 10px #8F2B94;
			box-shadow: 0px 0px 10px #8F2B94;
			transition:all 0.5s;
			-webkit-transition:all 0.5s;
		}
		.txtinput:focus {
			-moz-box-shadow: 0px 0px 20px #8F2B94;
			-webkit-box-shadow: 0px 0px 20px #8F2B94;
			box-shadow: 0px 0px 20px #8F2B94;
			transition:all 0.5s;
			-webkit-transition:all 0.5s;
		}
	td {
		padding:8px 20px;
	}
	</style>
	<table>
		<form class="loginfrm" action="process.php" method="post">
		<tr>
			<td colspan="2"><p class="heading center">Login</p></td>
		</tr>
		<tr>
			<td colspan="2"><p class="text" style="float:right;margin-top:-50px;"><a href="/register">Register</a></p></td>
		</tr>
		<tr>
			<td style="width:20%;text-align:right;">Username</td>
			<td style="width:80%;text-align:left;"><input type="text" name="username" class="txtinput"><br></td>
		</tr>
		<tr>
			<td style="width:20%;text-align:right;">Password</td>  
			<td style="width:80%;text-align:left;"><input type="password" name="password" class="txtinput"><br></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:right;"><input class="button" type="submit"></td>
		</tr>
		</form>
	</table>
';
}
}
echo '</div>';

?>