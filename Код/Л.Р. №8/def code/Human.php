<?php
class Human
{
	var $name;
	function  __construct($nameofperson, $ageofperson)
	{
		$this->name= $nameofperson;
		$this->age= $ageofperson;
	}
	function set_name($newname)
	{
		$this->name=$newname;
	}
	function set_age($newage)
	{
		$this->age=$newage;
	}
	function get_name()
	{
		echo $this->name;
	}
	function get_age()
	{
		echo $this->age;
	}
}

$firstObject = new Human("Іван", 23);
$secondObject = new Human("Ярослав", 35);
echo "<p>";
$firstObject->get_name();
echo " ";
$firstObject->get_age();
echo "</p>";
echo "<p>";
$secondObject->get_name();
echo " ";
$secondObject->get_age();
echo "</p>";
echo "Змінюємо ім'я Івана на Кирило та вік Ярослава з 35 на 15";
$firstObject->set_name("Кирило");
$secondObject->set_age(15);
echo "<p>";
$firstObject->get_name();
echo " ";
$firstObject->get_age();
echo "</p>";
echo "<p>";
$secondObject->get_name();
echo " ";
$secondObject->get_age();
echo "</p>";
?>