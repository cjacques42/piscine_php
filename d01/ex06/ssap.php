#!/usr/bin/env php
<?php
$ret = array();
for ($i = 1; $i < $argc; $i++)
{
	$array = explode(" ", $argv[$i]);
	foreach ($array as $word)
	{
		if ($word != NULL)
			array_push($ret, $word);
	}
}
sort($ret);
foreach ($ret as $val)
	echo "$val\n";
?>
