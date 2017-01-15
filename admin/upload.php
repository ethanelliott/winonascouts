<?php

$path = $_POST['filepath'];

if ($_FILES["file"]["error"] > 0)
{
	echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
}
else
{
	if (file_exists($path . $_FILES["file"]["name"]))
	{
		echo $_FILES["file"]["name"] . " already exists. ";
	}
	else
	{
		move_uploaded_file($_FILES["file"]["tmp_name"],
		$path . $_FILES["file"]["name"]);
		echo "Stored in: " . $path . $_FILES["file"]["name"];
	}
}

?>