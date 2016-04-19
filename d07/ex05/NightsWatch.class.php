<?php
class NightsWatch
{
	private $_array = array();

	public function recruit( $person )
	{
		if ( $person instanceof IFighter)
			array_push($this->_array, $person);
	}
	public function fight()
	{
		foreach ($this->_array as $fighter)
			$fighter->fight();
	}
}
?>