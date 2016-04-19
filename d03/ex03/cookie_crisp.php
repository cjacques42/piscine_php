<?php
if ($_GET['action'] == 'set' && $_GET['name'] != NULL && $_GET['value'] != NULL)
{
	$value = $_GET['value'];
	setcookie($_GET['name'], $value, time()+3600);
}
if ($_GET['action'] == 'get' && $_GET['name'] != NULL)
{
	$value = $_GET['name'];
	if ($_COOKIE[$value] != NULL)
		echo $_COOKIE[$value]."\n";
}
if ($_GET['action'] == 'del' && $_GET['name'] != NULL)
{
	$value = $_GET['name'];
	setcookie ($value, "", time() - 3600);
}
?>
