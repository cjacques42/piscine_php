#!/usr/bin/env php
<?php
if ($argc > 2)
{
	$tab = array();
	for ($i = 2; $i < $argc; $i++)
	{
		$hash = explode(":", $argv[$i]);
		$tab[$hash[0]] = $hash[1];
	}
	$i = 0;
	foreach ($tab as $key => $val)
	{
		if (($key == $argv[1] && !is_numeric($key)) ||
				($key == $argv[1] && is_numeric($key) && is_numeric($argv[1])))
			$ret = $tab[$key];
	}
	if ($ret != NULL)
		echo "$ret\n";
}
?>
