#!/usr/bin/env php
<?php
if ($argc > 1)
	echo trim(preg_replace("/[\t ]+/", " ", $argv[1]), " ")."\n";
?>
