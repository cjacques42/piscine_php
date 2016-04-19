<?php
class Vertex
{
	static $verbose = false;
	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 1.0;
	private $_color;

	public function __construct ( array $kwargs )
	{
		if (array_key_exists('x', $kwargs))
			$this->_x = $kwargs['x'];
		if (array_key_exists('y', $kwargs))
			$this->_y = $kwargs['y'];
		if (array_key_exists('z', $kwargs))
			$this->_z = $kwargs['z'];
		if (array_key_exists('w', $kwargs))
			$this->_w = $kwargs['w'];
		if (array_key_exists('color', $kwargs))
			$this->_color = $kwargs['color'];
		else
			$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
		if (self::$verbose)
			print($this. " constructed".PHP_EOL);
	}

	public function __toString ()
	{
		if (self::$verbose)
			return 'Vertex( x: '. sprintf("%.2f", $this->_x) .', y: '. sprintf("%.2f", $this->_y) .', z:' .sprintf("%.2f", $this->_z) .', w:'. sprintf("%.2f", $this->_w) .', '. $this->_color .' )';
		else
			return 'Vertex( x: '. sprintf("%.2f", $this->_x) .', y: '. sprintf("%.2f", $this->_y) .', z:' .sprintf("%.2f", $this->_z) .', w:'. sprintf("%.2f", $this->_w) .' )';
	}

	public static function doc()
	{
		echo file_get_contents("Vertex.doc.txt");
	}

	public function getX() { return $this->_x; }
	public function getY() { return $this->_x; }
	public function getZ() { return $this->_x; }
	public function getW() { return $this->_x; }

	public function setX ( $v )
	{
		$this->_x = $v;
	}

	public function setY ( $v )
	{
			$this->_y = $v;
	}

	public function setZ ( $v )
	{
			$this->_z = $v;
	}

	public function setW ( $v )
	{
			$this->_w = $v;
	}

	public function setColor ( Color $rhs )
	{
			$this->_color = $rhs;
	}

	public function __destruct ()
	{
		if (self::$verbose)
			print($this. " destructed".PHP_EOL);
	}
}
?>
