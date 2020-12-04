<?php
session_start();
echo $_SESSION['username'].' , ти перейшов на другу сторінку!';
echo("<br>");
?>
<a href="page3.php">На наступну сторінку</a>