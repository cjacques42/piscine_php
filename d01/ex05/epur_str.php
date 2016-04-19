#!/usr/bin/env php
<?php
if ($argc == 2)
{
	$i = 0;
	$tab = explode(" ", $argv[1]);
	foreach ($tab as $word)
	{
		if ($word != NULL)
		{
			if ($i == 0)
				echo "$word";
			else
				echo " $word";
			$i++;
		}
	}
	echo "\n";
}
?>
