<?php
abstract class Fighter
{
	public $fighter;
	
	abstract public function fight( $target );

	public function __construct( $str )
	{
		$this->fighter = $str;
	}
	public function __toString()
	{
		return $this->fighter;
	}
}
?>