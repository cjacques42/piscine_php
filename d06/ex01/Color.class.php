<?php
class Color
{
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	static $verbose = false;

	public function __construct( array $kwargs )
	{
		if ( array_key_exists('rgb', $kwargs))
		{
			$this->red = (intval($kwargs['rgb']) >> 16) & 0xFF;
			$this->green = (intval($kwargs['rgb']) >> 8) & 0xFF;
			$this->blue = intval($kwargs['rgb']) & 0xFF;
		}
		if ( array_key_exists('red', $kwargs))
			$this->red = intval($kwargs['red']);
		if ( array_key_exists('green', $kwargs))
			$this->green = intval($kwargs['green']);
		if ( array_key_exists('blue', $kwargs))
			$this->blue = intval($kwargs['blue']);
		if (self::$verbose)
			print ($this." constructed.".PHP_EOL);
	}

	public function __toString()
	{
		return 'Color( red: '.sprintf("%3d", $this->red).', green: '.sprintf("%3d", $this->green).', blue: '.sprintf("%3d", $this->blue).' )';
	}

	public static function doc()
	{
		echo file_get_contents("Color.doc.txt");
	}
	
	public function add( Color $rhs)
	{
		$var_r = $this->red + $rhs->red;
		$var_g = $this->green + $rhs->green;
		$var_b = $this->blue + $rhs->blue;
		return (new Color(array("red" => $var_r, "green" => $var_g, "blue" => $var_b)));
	}

	public function sub( Color $rhs)
	{
		$var_r = $this->red - $rhs->red;
		$var_g = $this->green - $rhs->green;
		$var_b = $this->blue - $rhs->blue;
		return (new Color(array("red" => $var_r, "green" => $var_g, "blue" => $var_b)));
	}

	public function mult( $f )
	{
		$var_r = $this->red * $f;
		$var_g = $this->green * $f;
		$var_b = $this->blue * $f;
		return (new Color(array("red" => $var_r, "green" => $var_g, "blue" => $var_b)));
	}

	public function __destruct()
	{
		if (self::$verbose)
			print ($this." destructed.".PHP_EOL);
	}
}
?>
