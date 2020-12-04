<?php
class Car
{
	function __construct()
	{
		print "Constructor";
		$this->name = "Car";
	}
	function __destruct()
	{
		print "Destroying " . $this->name;
	}
}
$obj = new Car();
?>