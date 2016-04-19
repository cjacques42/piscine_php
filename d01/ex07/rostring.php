#!/usr/bin/env php
<?php
$ret = array();
if ($argc > 1)
{
	$array = explode(" ", $argv[1]);
	foreach ($array as $word)
	{
		if ($word != NULL)
			array_push($ret, $word);
	}
	$first = array_shift($ret);
	array_push($ret, $first);
	$i = 0;
	foreach ($ret as $val)
	{
		if ($i == 0)
			echo "$val";
		else
			echo " $val";
		$i++;
	}
	echo "\n";
}
?>
