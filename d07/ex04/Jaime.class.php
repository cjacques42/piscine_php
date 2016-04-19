<?php
class Jaime
{
		public function sleepWith( $v )
	{
		if ($v instanceof Lannister)
			echo "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
		else if ($v instanceof Stark)
			echo "Let's do this." . PHP_EOL;
		else
			echo "Not even if I'm drunk !" . PHP_EOL;
	}
}
?>