<?php
function decroi($list)
{
	$other = $list;
	sort($other);
	$i = count($list) - 1;
	foreach ($list as $word)
	{
		if ($word != $other[$i])
			return false;
		$i--;
	}
	return true;
}

function croi($list)
{
	$other = $list;
	sort($other);
	$i = 0;
	foreach ($list as $word)
	{
		if ($word != $other[$i])
			return false;
		$i++;
	}
	return true;
}

function ft_is_sort($list)
{
	if (decroi($list) == true || croi($list) == true)
		return true;
	else
		return false;
}
?>
