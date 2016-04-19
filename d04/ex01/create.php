<?php
	$dir = "../private/";
	$file = "passwd";
	$stock = array();
	$big = array();
	if (file_exists($dir) == false)
		mkdir($dir, 0777, true);
	if ($_POST["submit"] == "OK" && $_POST["login"] != NULL && $_POST["passwd"] != NULL)
	{
		$i = 0;
		$stock ['login'] = $_POST["login"];
		$stock ['passwd'] = hash('whirlpool', $_POST["passwd"]);
		if (file_exists($dir.$file) == true)
		{
			$big = unserialize(file_get_contents($dir.$file));
			foreach ($big as $tab)
			{
				if ($tab['login'] == $_POST["login"])
				{
						echo "ERROR\n";
						return ;
				}
				$i++;
			}
		}
		$big [$i] = $stock;
		$data = serialize($big);
		file_put_contents($dir.$file, $data."\n");
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>
