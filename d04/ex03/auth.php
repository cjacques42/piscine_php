<?php

function auth($login, $passwd)
{
	$dir = "../private/";
	$file = "passwd";
	$stock = array();
	$big = array();
	if ($login != NULL && $passwd != NULL)
	{
		$pass = hash('whirlpool', $passwd);
		$big = unserialize(file_get_contents($dir.$file));
		foreach ($big as $tab)
		{
			if ($tab['login'] == $login && $tab['passwd'] == $pass)
				return true;
		}
		return false;
	}
	else
		return false;
}

?>
