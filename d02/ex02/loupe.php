#!/usr/bin/env php
<?php

function content($content)
{
	return $content[1].strtoupper($content[2]);
}

function replace($tab)
{
	$tab[0] = preg_replace_callback('/(title *= *")([^"]*)/i', "content", $tab[0]);
	$tab[0] = preg_replace_callback('/([^>]*>)([^<]*)/i', "content", $tab[0]);
	return $tab[0];
}

if ($argc == 2)
{
	$tab = array();
	$handle = fopen("$argv[1]", "r");
	if ($handle != false)
	{
		while (!feof($handle))
		{
			$data = fgets($handle);
			$data = substr($data, 0, -1);
			array_push($tab, $data);
		}
		$str = implode("\n", $tab);
		$str = preg_replace_callback("/<\s*a[^>]*.*?<\s*\/\s*a[^>]*/si", "replace", $str);
		echo $str;
		fclose($handle);
	}
}
?>
