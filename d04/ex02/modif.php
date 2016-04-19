<?php
	$dir = "../private/";
	$file = "passwd";
	$stock = array();
	$big = array();
	if ($_POST["submit"] == "OK" && $_POST["login"] != NULL && $_POST["newpw"] != NULL
		&& $_POST["oldpw"] != NULL)
	{
		$i = 0;
		$user = $_POST["login"];
		$oldpw = hash('whirlpool', $_POST["oldpw"]);
		$big = unserialize(file_get_contents($dir.$file));
		foreach ($big as $tab)
		{
			if ($tab['login'] == $user && $tab['passwd'] == $oldpw)
			{
				$big[$i]['passwd'] = hash('whirlpool', $_POST["newpw"]);
				$data = serialize($big);
				file_put_contents($dir.$file, $data);
				echo "OK\n";
				return ;
			}
			$i;
		}
		echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
