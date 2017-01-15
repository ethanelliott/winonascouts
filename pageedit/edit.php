<?php
$section = $_GET['section'];
$type = $_GET['type'];
echo $section;
echo "<BR />";
echo $type;
echo "<BR />";
echo "<BR />";
echo '<p class="heading accent2c">';
echo 'Edit ';
Switch ($section)
{
	case 1:
		echo 'Beavers ';
		break;
	case 2:
		echo 'Cubs ';
		break;
	case 3:
		echo 'Scouts ';
		break;
	case 4:
		echo 'Venturers ';
		break;
	case 5:
		echo 'Rovers ';
		break;
	default:
		break;
}
switch ($type)
{
	case "blog":
		echo 'Blog';
		break;
	case "page":
		echo 'Page';
		break;
	default:
		break;
}
echo '</p>';
?>