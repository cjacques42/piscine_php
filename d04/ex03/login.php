<?php
	include("auth.php");
	session_start();
	$user = $_GET['login'];
	$pw = $_GET['passwd'];
	if (auth($user, $pw) == true)
	{
		$_SESSION['loggued_on_user'] = $user;
		echo "OK\n";
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo "ERROR\n";
	}
?>
