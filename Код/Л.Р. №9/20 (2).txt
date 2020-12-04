<?php
$counter = 0;
if(isset($_COOKIE["counter"])){ 
	$counter = $_COOKIE["counter"];
}
$counter++;
setCookie("counter", $counter, time()+3600);
setCookie("time", date("d/m/Y H:i:s"),  time()+3600);
?>
<html>
	<head>
		<title>Налаштування файлів cookie за допомогою PHP</title>
	</head>
	<body>
		<?php
		if ($counter < 2)
			echo "<h1>Ласкаво просимо!</h1>";
		else
		{
			echo "Ви зайшли на сторінку ".$counter." разів <br/>";
			echo "Останнє відвідування: ".$_COOKIE['time'];
		}
		?>
	</body>
</html>