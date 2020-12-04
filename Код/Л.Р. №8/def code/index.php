<?php
		class Person // Створюємо новий клас Person
		{
			// Властивості
			var $name;
			var $city;
			// Ініціалізуючий метод
			function Init($name)
			{
				$this->name = $name;
				$this->city = "Київ";
			}
		}
		$object = new Person; // Створюємо об`єкт класу Person
		$object->Init(""); // Для ініціалізації об`єкту одразу викликаємо метод
		?>