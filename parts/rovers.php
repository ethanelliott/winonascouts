<?php
$file_handle = fopen("content/rovers.txt", "r") or die("Cannot Open File");
$content = "";
while (!feof($file_handle)) 
{
	$content .= fgets($file_handle);
}

?>
<div id="content">
	<?php echo $content; ?>
</div>