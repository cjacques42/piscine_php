#!/usr/bin/env php
<?php
function ft_explode_op($ret)
{
	$pos = strpos($ret, "+");
	if ($pos !== false)
	{
		$str = explode("+", $ret);
		array_push($str, "+");
	}
	$pos = strpos($ret, "-");
	if ($pos !== false)
	{
		$str = explode("-", $ret);
		array_push($str, "-");
	}
	$pos = strpos($ret, "/");
	if ($pos !== false)
	{
		$str = explode("/", $ret);
		array_push($str, "/");
	}
	$pos = strpos($ret, "*");
	if ($pos !== false)
	{
		$str = explode("*", $ret);
		array_push($str, "*");
	}
	$pos = strpos($ret, "%");
	if ($pos !== false)
	{
		$str = explode("%", $ret);
		array_push($str, "%");
	}
	return $str;
}

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
}
else
{
	$new = array();
	$ret = array();
	$tab = array();
	$ret = ft_explode_op($argv[1]);
	if (count($ret) != 3)
	{
		echo "Syntax Error\n";
		exit;
	}
	foreach ($ret as $word)
	{
		if ($word != NULL)
			$new = array_merge($new, explode(" ", $word));
	}
	foreach ($new as $line)
	{
		if ($line != NULL)
			array_push($tab, $line);
	}
	if (count($tab) != 3 || is_numeric($tab[0]) == false || is_numeric($tab[1]) == false)
	{
		echo "Syntax Error\n";
		exit;
	}
	if ($ret[2] == "+")
		$val = $ret[0] + $ret[1];
	if ($ret[2] == "-")
		$val = $ret[0] - $ret[1];
	if ($ret[2] == "*")
		$val = $ret[0] * $ret[1];
	if ($ret[2] == "/")
		$val = $ret[0] / $ret[1];
	if ($ret[2] == "%")
		$val = $ret[0] % $ret[1];
	echo "$val\n";
}
?>
