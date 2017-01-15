<?php function getPath(){$xpath = $_SERVER['DOCUMENT_ROOT'];if (strpos($xpath, 'A:/wamp/www') !== false){$filepath = "A:/wamp/www";return $filepath;}else{$filpath = "/home/u7948460/public_html";return $filpath;}}?>
<?php 
$path = getPath();
$ProcessUsers = $path . "/login/convert.php";
?>
<?php 

$file_path = $_POST['filepath'];
$file_text = $_POST['filetext'];
$appstore = $_POST['appstore'];
$users = $_POST['users'];


if ($users==true)
{
	include $ProcessUsers;
	$username = $_POST['rusername'];
	$name = $_POST['rname'];
	$password = $_POST['rpassword'];
	$email = $_POST['rmail'];
	$dater = date('l F jS Y \:: h:i:s A');
	$encpassr=convert($password,$key); 
	$encuserr=convert($username,$key); 
	$encnamer=convert($name,$key); 
	$encmailr=convert($email,$key);
	if ($name=="")
	{
		$file_handle = fopen($file_path, "w+") or die("Cannot Open File");
		fwrite($file_handle,$file_text);
		fclose($file_handle);
	}
	else
	{
		$datar = PHP_EOL . $encuserr . "|[&*&]|" . $encpassr . "|[&*&]|" . $encnamer . "|[&*&]|" . $encmailr . "|[&*&]|" . $dater;
		$file_handle = fopen($file_path, "a+") or die("Cannot Open File");
		fwrite($file_handle,$datar);
	}
}
else
{
	$file_handle = fopen($file_path, "w+") or die("Cannot Open File");

	fwrite($file_handle,$file_text);

	fclose($file_handle);
}

echo '
<META http-equiv="refresh" content="0;URL=/admin">
';

?>