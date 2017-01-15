<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php function getPath(){$xpath = $_SERVER['DOCUMENT_ROOT'];if (strpos($xpath, 'A:/wamp/www') !== false){$filepath = "A:/wamp/www";return $filepath;}else{$filpath = "/home/a5392683/public_html";return $filpath;}}?>
	<?php $path = getPath();$path .= "/parts/htmlhead.php";include_once($path);?>
	<title>1st Winona | Calendar</title>
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
		<?php $path = getPath();$path .= "/parts/calendar.php";include_once($path);?>
		<iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/calendar/embed?title=1st%20Winona%20Scout%20Gro…eather%40group.v.calendar.google.com&color=%232F6309&ctz=America%2FToronto"></iframe>
	</div>
	<div id="footer">
		<?php $path = getPath();$path .= "/parts/footer.php";include_once($path);?>
	</div>
</div>
</body>
</html>