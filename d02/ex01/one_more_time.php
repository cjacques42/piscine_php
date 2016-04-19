#!/usr/bin/env php
<?php
if ($argc == 2)
{
	$day = array();
	$day[] = "#lundi#i";
	$day[] = "#mardi#i";
	$day[] = "#mercredi#i";
	$day[] = "#jeudi#i";
	$day[] = "#vendredi#i";
	$day[] = "#samedi#i";
	$day[] = "#dimanche#i";
	$month = array();
	$month[] = "#janvier#i";
	$month[] = "#fevrier#i";
	$month[] = "#mars#i";
	$month[] = "#avril#i";
	$month[] = "#mai#i";
	$month[] = "#juin#i";
	$month[] = "#juillet#i";
	$month[] = "#aout#i";
	$month[] = "#septembre#i";
	$month[] = "#octobre#i";
	$month[] = "#novembre#i";
	$month[] = "#decembre#i";
	$numb = array();
	$numb[] = "01";
	$numb[] = "02";
	$numb[] = "03";
	$numb[] = "04";
	$numb[] = "05";
	$numb[] = "06";
	$numb[] = "07";
	$numb[] = "08";
	$numb[] = "09";
	$numb[] = "10";
	$numb[] = "11";
	$numb[] = "12";
	date_default_timezone_set('Europe/Paris');
	$argv[1] = preg_replace($month, $numb, $argv[1]);
	$argv[1] = preg_replace($day, "0", $argv[1]);
	$date = explode(" ", $argv[1]);
	$sec = explode(":", $date[4]);
	if (count($date) != 5 || count($sec) != 3 || checkdate($date[2], $date[1], $date[3]) == false || $sec[0] > 23
		|| $sec[1] > 59 || $sec[2] > 59 || preg_match("/[^0-9 :]/", $argv[1]) == true || strlen($sec[0]) != 2 
		|| strlen($sec[1]) != 2 || strlen($sec[2]) != 2 || strlen($date[3]) != 4
		|| $date[3] < 1970)
	{
		echo "Wrong Format\n";
		exit;
	}
	$time = mktime($sec[0], $sec[1], $sec[2], $date[2], $date[1], $date[3]);
	if ($time == false)
		echo "Wrong Format\n";
	else
		echo "$time\n";
}
?>
