#!/usr/bin/env php
<?php
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
}
else
{
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
	if ($ret[1] == "+")
		$val = $ret[0] + $ret[2];
	if ($ret[1] == "-")
		$val = $ret[0] - $ret[2];
	if ($ret[1] == "*")
		$val = $ret[0] * $ret[2];
	if ($ret[1] == "/")
		$val = $ret[0] / $ret[2];
	if ($ret[1] == "%")
		$val = $ret[0] % $ret[2];
	echo "$val\n";
}
?>
