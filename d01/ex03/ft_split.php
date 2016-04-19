<?php
function ft_split($str)
{
	$ret = array();
	$array = explode(" ", $str);
	foreach ($array as $word)
	{
		if ($word != NULL)
			array_push($ret, $word);
	}
	return $ret;
}
?>
