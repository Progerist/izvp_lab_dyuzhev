<?php
	class A
	{
		function example()
		{
			echo "Першопочаткова функція A::example().<br>";
		}
	}
	class B extends A
	{
		function example()
		{
			echo "Перевизначена функція B::example().<br>";
			A::example();
		}
	}
	A::example();
	$b = new B;
	$b->example();
?>