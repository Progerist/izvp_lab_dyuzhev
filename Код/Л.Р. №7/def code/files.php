<?php
$num_stroka = 3; //Видалимо 5 рядок з файлу
$file = file("counter.txt"); // Зчитуємо весь файл в масив

for($i = 0; $i < sizeof($file); $i++)
if($i == $num_stroka) unset($file[$i]);

$fp = fopen("counter.txt", "w");
fputs($fp, implode("", $file));
fclose($fp);
?>