<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php function getPath(){$xpath = $_SERVER['DOCUMENT_ROOT'];if (strpos($xpath, 'A:/wamp/www') !== false){$filepath = "A:/wamp/www";return $filepath;}else{$filpath = "/home/a5392683/public_html";return $filpath;}}?>
	<?php $path = getPath();$path .= "/parts/htmlhead.php";include_once($path);?>
	<title>1st Winona | Home</title>
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
		<?php $path = getPath();$path .= "/parts/slider.php";include_once($path);?>
		<table width="100%" border="0">
			<tr>
				<td colspan="100">
					<p class="heading accent2c">Welcome to the 1<sup>st</sup> Winona Scout Group&apos;s Website!</p>
				</td>
			</tr>
			<tr>
				<td width="50%">
					<?php $path = getPath();$path .= "/parts/home.php";include_once($path);?>
				</td>
				<td width="50%">
					<iframe width="100%" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?oe=utf-8&amp;client=firefox-a&amp;q=1327+Barton+St,+Stoney+Creek,+ON+L8E+5L1,+Canada&amp;ie=UTF8&amp;hq=&amp;hnear=1327+Barton+St,+Hamilton,+Hamilton+Division,+Ontario+L8E+5L1&amp;gl=ca&amp;t=m&amp;source=embed&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
				</td>
			</tr>
		</table>
		<?php $path = getPath();$path .= "/blog/home.php";include_once($path);?>
	</div>
	<div id="footer">
		<?php $path = getPath();$path .= "/parts/footer.php";include_once($path);?>
	</div>
</div>
</body>
</html>