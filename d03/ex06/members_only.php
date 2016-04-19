<?php
$user = NULL;
$pw = NULL;

$username = 'zaz';
$password = 'jaimelespetitsponeys';

if ($_SERVER['PHP_AUTH_USER'] != NULL)
{
	$user = $_SERVER['PHP_AUTH_USER'];
	$pw = $_SERVER['PHP_AUTH_PW'];
}
if ($password == $pw && $user == $username)
{
	$str = file_get_contents("../img/42.png");
	$str = base64_encode($str);
	echo "<html><body>"."\n";
	echo "Bonjour Zaz<br />"."\n";
	echo "<img src='data:image/png;base64,$str'\>"."\n";
	echo "</body></html>"."\n";
}
else
{
	header("WWW-Authenticate: Basic realm=''Espace membres''");
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>"."\n";
}
?>
