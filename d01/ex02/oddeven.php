#!/usr/bin/env php
<?php
	$handle = fopen("php://stdin", 'r');
	while (1)
	{
		echo "Entrez un nombre: ";
		$line = fgets($handle);
		if ($line == NULL)
			break;
		$line = substr($line, 0, -1);
		if (is_numeric($line))
		{
			if ($line % 2 == 0)
			{
				echo "Le chiffre $line est Pair\n";
			}
			else
			{
				echo "Le chiffre $line est Impair\n";
			}
		}
		else
		{
			echo "'$line' n'est pas un chiffre\n";
		}
	}
	echo "\n";
?>
