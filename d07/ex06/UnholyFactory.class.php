<?php
class UnholyFactory
{
	private $_array = array();

	public function absorb( $class )
	{
		if ($class instanceof Fighter)
		{
			if (in_array($class, $this->_array))
				print ("(Factory already absorbed a fighter of type " . $class . ")" . PHP_EOL);
			else
				print ("(Factory absorbed a fighter of type " . $class . ")" . PHP_EOL);
			array_push($this->_array, $class);
		}
		else
			print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
	}
	public function fabricate ( $class )
	{
		$var = array_search($class, $this->_array);
		if ($var === false)
			print("(Factory hasn't absorbed any fighter of type " . $class . ")" . PHP_EOL);
		else
		{
			print("(Factory fabricates a fighter of type " . $class . ")" . PHP_EOL);
			return clone $this->_array[$var];
		}
		return NULL;
	}
}
?>
