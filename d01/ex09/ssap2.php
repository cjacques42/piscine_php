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
sort($ret, SORT_STRING|SORT_FLAG_CASE);
for ($i = 0; $i < count($ret); $i++)
{
	if (is_numeric($ret[$i]) == true)
	{
		array_push($ret, $ret[$i]);
		unset($ret[$i]);
	}
}
$ret = array_values($ret);
for ($i = 0; $i < count($ret); $i++)
{
	if (is_numeric($ret[$i]) == false && ctype_alpha($ret[$i]) == false)
	{
		array_push($ret, $ret[$i]);
		unset($ret[$i]);
	}
}
$ret = array_values($ret);
foreach ($ret as $val)
	echo "$val\n";
?>
