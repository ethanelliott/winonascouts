<?php function getThePath(){$xpath = $_SERVER['DOCUMENT_ROOT'];if (strpos($xpath, 'A:/wamp/www') !== false){$filepath = "A:/wamp/www";return $filepath;}else{$filpath = "/home/a5392683/public_html";return $filpath;}}?>
<?php

$path = getThePath();
$home_path = $path . "/content/home.txt";
$home_blog_path = $path . "/content/home_blog.txt";
$beaver_path = $path . "/content/beavers.txt";
$beaver_blog_path = $path . "/content/beavers_blog.txt";
$cub_path = $path . "/content/cubs.txt";
$cub_blog_path = $path . "/content/cubs_blog.txt";
$scout_path = $path . "/content/scouts.txt";
$scout_blog_path = $path . "/content/scouts_blog.txt";
$venturer_path = $path . "/content/venturers.txt";
$venturer_blog_path = $path . "/content/venturers_blog.txt";
$rover_path = $path . "/content/rovers.txt";
$rover_blog_path = $path . "/content/rovers_blog.txt";
$about_path = $path . "/content/about.txt";
$fundraising_path = $path . "/content/fundraising.txt";
$volunteer_path = $path . "/content/volunteering.txt";
$calendar_path = $path . "/content/calendar.txt";
$users_path = $path . "/login/users.txt";
$imgs_path = $path . "/imgs/";
$docs_path = $path . "/docs/";
$convert_path = $path . "/login/convert.php";
$load_path = $path . "/login/load_users.php";
$menu_path = $path . "/parts/menu.php";
$style_path = $path . "/style.css";

include $load_path;
include $convert_path;

$appstore = true;
$users = true;

$action = $_GET['action'];
$page = $_GET['page'];
$type = $_GET['type'];

echo '

<style>
textarea {
   resize: none;
   width:100%;
   margin:auto auto;
   font-family:"Courier New", Courier, monospace;
}
#save {
	float:right;
	margin:20px;
	font-size:20px;
}
</style>

';

if ($action=="edit")
{
echo '<div id="content" class="shadowb">';
	if ($page=="home")
	{
		$file_handle = fopen($home_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$home_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="beaver")
	{
		$file_handle = fopen($beaver_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$beaver_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="cub")
	{
		$file_handle = fopen($cub_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$cub_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="scout")
	{
		$file_handle = fopen($scout_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$scout_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="venturer")
	{
		$file_handle = fopen($venturer_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$venturer_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="rover")
	{
		$file_handle = fopen($rover_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$rover_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="home_blog")
	{
		echo '<a id="back" href="/admin">&larr;Back</a><br>';
		echo '<table style="width:100%;text-align:center;" border="1">';
		echo '
				<tr>
					<td>Title</td>
					<td>Date</td>
					<td>Author</td>
					<td style="width:60%;">Content</td>
				</tr>
		';
		$file_handle = fopen($home_blog_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$line_of_text = fgets($file_handle);
			$text_home .= $line_of_text;
			$stringline = explode('|*|', $line_of_text);
			echo '
				<tr>
					<td>' . $stringline[0] . '</td>
					<td>' . $stringline[1] . '</td>
					<td>' . $stringline[2] . '</td>
					<td>' . $stringline[3] . '</td>
				</tr>
			';
			$usersnum = $usersnum + 1;
		}
		echo '</table><br />
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$home_blog_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="beaver_blog")
	{
		echo '<a id="back" href="/admin">&larr;Back</a><br>';
		echo '<table style="width:100%;text-align:center;" border="1">';
		echo '
				<tr>
					<td>Title</td>
					<td>Date</td>
					<td>Author</td>
					<td style="width:60%;">Content</td>
				</tr>
		';
		$file_handle = fopen($beaver_blog_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$line_of_text = fgets($file_handle);
			$text_home .= $line_of_text;
			$stringline = explode('|*|', $line_of_text);
			echo '
				<tr>
					<td>' . $stringline[0] . '</td>
					<td>' . $stringline[1] . '</td>
					<td>' . $stringline[2] . '</td>
					<td>' . $stringline[3] . '</td>
				</tr>
			';
			$usersnum = $usersnum + 1;
		}
		echo '</table><br />
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$beaver_blog_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="cub_blog")
	{
		echo '<a id="back" href="/admin">&larr;Back</a><br>';
		echo '<table style="width:100%;text-align:center;" border="1">';
		echo '
				<tr>
					<td>Title</td>
					<td>Date</td>
					<td>Author</td>
					<td style="width:60%;">Content</td>
				</tr>
		';
		$file_handle = fopen($cub_blog_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$line_of_text = fgets($file_handle);
			$text_home .= $line_of_text;
			$stringline = explode('|*|', $line_of_text);
			echo '
				<tr>
					<td>' . $stringline[0] . '</td>
					<td>' . $stringline[1] . '</td>
					<td>' . $stringline[2] . '</td>
					<td>' . $stringline[3] . '</td>
				</tr>
			';
			$usersnum = $usersnum + 1;
		}
		echo '</table><br />
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$cub_blog_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="scout_blog")
	{
		echo '<a id="back" href="/admin">&larr;Back</a><br>';
		echo '<table style="width:100%;text-align:center;" border="1">';
		echo '
				<tr>
					<td>Title</td>
					<td>Date</td>
					<td>Author</td>
					<td style="width:60%;">Content</td>
				</tr>
		';
		$file_handle = fopen($scout_blog_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$line_of_text = fgets($file_handle);
			$text_home .= $line_of_text;
			$stringline = explode('|*|', $line_of_text);
			echo '
				<tr>
					<td>' . $stringline[0] . '</td>
					<td>' . $stringline[1] . '</td>
					<td>' . $stringline[2] . '</td>
					<td>' . $stringline[3] . '</td>
				</tr>
			';
			$usersnum = $usersnum + 1;
		}
		echo '</table><br />
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$scout_blog_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="venturer_blog")
	{
		echo '<a id="back" href="/admin">&larr;Back</a><br>';
		echo '<table style="width:100%;text-align:center;" border="1">';
		echo '
				<tr>
					<td>Title</td>
					<td>Date</td>
					<td>Author</td>
					<td style="width:60%;">Content</td>
				</tr>
		';
		$file_handle = fopen($venturer_blog_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$line_of_text = fgets($file_handle);
			$text_home .= $line_of_text;
			$stringline = explode('|*|', $line_of_text);
			echo '
				<tr>
					<td>' . $stringline[0] . '</td>
					<td>' . $stringline[1] . '</td>
					<td>' . $stringline[2] . '</td>
					<td>' . $stringline[3] . '</td>
				</tr>
			';
			$usersnum = $usersnum + 1;
		}
		echo '</table><br />
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$venturer_blog_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="rover_blog")
	{
		echo '<a id="back" href="/admin">&larr;Back</a><br>';
		echo '<table style="width:100%;text-align:center;" border="1">';
		echo '
				<tr>
					<td>Title</td>
					<td>Date</td>
					<td>Author</td>
					<td style="width:60%;">Content</td>
				</tr>
		';
		$file_handle = fopen($rover_blog_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$line_of_text = fgets($file_handle);
			$text_home .= $line_of_text;
			$stringline = explode('|*|', $line_of_text);
			echo '
				<tr>
					<td>' . $stringline[0] . '</td>
					<td>' . $stringline[1] . '</td>
					<td>' . $stringline[2] . '</td>
					<td>' . $stringline[3] . '</td>
				</tr>
			';
			$usersnum = $usersnum + 1;
		}
		echo '</table><br />
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$rover_blog_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="about")
	{
		$file_handle = fopen($about_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$about_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="fundraising")
	{
		$file_handle = fopen($fundraising_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$fundraising_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="volunteer")
	{
		$file_handle = fopen($volunteer_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$volunteer_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="calendar")
	{
		$file_handle = fopen($calendar_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$calendar_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="users")
	{
		$file_handle = fopen($users_path, "a+") or die("Cannot Open File");
		$usersnum = 0;
		echo '<a id="back" href="/admin">&larr;Back</a><table border="1" style="width:100%;text-align:center;">';
		echo '
		
		<tr>
			<td><p style="font-size:25px;">Username</p></td>
			<td><p style="font-size:25px;">Password</p></td>
			<td><p style="font-size:25px;">Name</p></td>
			<td><p style="font-size:25px;">Email</p></td>
			<td><p style="font-size:25px;">Date</p></td>
			<td><p style="font-size:25px;">Section</p></td>
			<td><p style="font-size:25px;">Leader</p></td>
		</tr>
		
		';
		while (!feof($file_handle)) 
		{
			$line_of_text = fgets($file_handle);
			$text_home .= $line_of_text;
			$stringline = explode('|[&*&]|', $line_of_text);
			if($stringline[6]==1){$ldr="Yes";}else{$ldr="No";}
			echo '
				<tr>
					<td>' . convert($stringline[0],$key) . '</td>
					<td>' . convert($stringline[1],$key) . '</td>
					<td>' . convert($stringline[2],$key) . '</td>
					<td>' . convert($stringline[3],$key) . '</td>
					<td>' . $stringline[4] . '</td>
					<td>' . $stringline[5] . '</td>
					<td>' . $ldr . '</td>
				</tr>
			';
			$usersnum = $usersnum + 1;
		}
		echo '</table>';
		echo '
			<form action="edit.php" method="post">
				<textarea name="users" style="display:none;">'.$users.'</textarea>
				<textarea name="filepath" style="display:none;">'.$users_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<table style="margin:auto auto;">
					<tr>
						<td colspan="2" style="text-align:center">Add a User:</td>
					</tr>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="rname"></input></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="rmail"></input></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="rusername"></input></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="rpassword"></input></td>
					</tr>
				</table>
				<input type="submit" value="Save and Update" id="save">
			</form>
		';
	}
	elseif ($page=="menu")
	{
		$file_handle = fopen($menu_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$menu_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	elseif ($page=="style")
	{
		$file_handle = fopen($style_path, "a+") or die("Cannot Open File");
		while (!feof($file_handle)) 
		{
			$text_home .= fgets($file_handle);
		}
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="edit.php" method="post">
				<textarea name="filepath" style="display:none;">'.$style_path.'</textarea>
				<textarea rows="20" name="filetext">'.$text_home.'</textarea><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
		';
	}
	echo '</div>';
}
elseif ($action=="upload")
{
	echo '<div id="content" class="shadowb">';
	if ($type=="image")
	{
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="upload.php" method="post" enctype="multipart/form-data">
			<textarea name="filepath" style="display:none;">'.$imgs_path.'</textarea>
				Upload an Image!<br>
				<input type="file" name="file" id="file"><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
			
		';
	}
	elseif ($type=="document")
	{
		echo '
			<a id="back" href="/admin">&larr;Back</a>
			<form action="upload.php" method="post" enctype="multipart/form-data">
			<textarea name="filepath" style="display:none;">'.$docs_path.'</textarea>
				Upload a Document!<br>
				<input type="file" name="file" id="file"><br>
				<input type="submit" value="Save and Submit" id="save">
			</form>
			
		';
	}
	echo '</div>';
}
else
{
echo '

<div id="content" class="shadowb">
';

echo ' 
<style>
#admin_panel td {
	padding-top:10px;
	padding-bottom:10px;
}
</style>
<table id="admin_panel" style="width:100%;text-align:center;" border="1">
	<tr>
		<td colspan="3000"><p class="heading accent3c">Admin</p></td>
	</tr>
	<tr>
		<td style="border-bottom:3px solid #000000;"><p class="sub-heading">Edit</p></td>
		<td style="border-bottom:3px solid #000000;"><p class="sub-heading">Edit Blogs</p></td>
		<td style="border-bottom:3px solid #000000;"><p class="sub-heading">Upload</p></td>
		<td style="border-bottom:3px solid #000000;"><p class="sub-heading">External Stuff</p></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=home">Edit Home Page</a><br></td>
		<td rowspan="2"><a href="/admin?action=edit&page=home_blog">Edit Home Blog</a><br></td>
		<td><a href="/admin?action=upload&type=image">Upload an Image</a><br></td>
		<td><a href="/" target="_blank">Google Analytics</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=about">Edit About Page</a><br></td>
		<td><a href="/admin?action=upload&type=document">Upload a Document</a><br></td>
		<td><a href="/" target="_blank">Stat Counter</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=beaver">Edit Beaver Page</a><br></td>
		<td><a href="/admin?action=edit&page=beaver_blog">Edit Beaver Blog</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=cub">Edit Cub Page</a><br></td>
		<td><a href="/admin?action=edit&page=cub_blog">Edit Cub Blog</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=scout">Edit Scout Page</a><br></td>
		<td><a href="/admin?action=edit&page=scout_blog">Edit Scout Blog</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=venturer">Edit Venturer Page</a><br></td>
		<td><a href="/admin?action=edit&page=venturer_blog">Edit Venturer Blog</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=rover">Edit Rover Page</a><br></td>
		<td><a href="/admin?action=edit&page=rover_blog">Edit Rover Blog</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=fundraising">Edit Fundraising Page</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=volunteer">Edit Volunteer Page</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=calendar">Edit Calendar Page</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=menu">Edit Menu</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=style">Edit Style</a><br></td>
	</tr>
	<tr>
		<td><a href="/admin?action=edit&page=users">Edit Users</a><br></td>
	</tr>
</table>
';
echo '</div>';
}

?>