<?php
$file_handle = fopen("content/venturers_blog.txt", "r") or die("Cannot Open File");
$content = "";
$titles = array();
$dates = array();
$authors = array();
$posts = array();
$numposts = 0;
while (!feof($file_handle)) 
{
	$line_of_text = fgets($file_handle);
	$stringparts = explode('|*|', $line_of_text);
	array_push($titles, $stringparts[0]);
	array_push($dates, $stringparts[1]);
	array_push($authors, $stringparts[2]);
	array_push($posts, $stringparts[3]);
	$numposts++;
}
$numposts = $numposts - 1;
?>
<div id="content" style="margin-top:20px;">
	<p class="heading venturers">Venturer Blog</p>
	<?php 
	for ($x=0; $x<=$numposts; $x++)
	{
		echo '<div id="line-full"></div>';
		echo '<p class="sub-heading venturers">' . $titles[$x] . '</p>';
		echo '<p class="date">' . $authors[$x] . ' | ' . $dates[$x] . '</p><br />';
		echo '<p class="text">' . $posts[$x] . '</p><br />';
	}
	 ?>
</div>