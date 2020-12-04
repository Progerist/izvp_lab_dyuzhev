<?php
// Ініціюємо сесію
session_start();
// Виводимо вміст суперглобального масиву $_SESSION
  echo "<pre>";
  print_r($_SESSION);
echo "</pre>";
?>