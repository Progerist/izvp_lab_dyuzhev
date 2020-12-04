<?php
session_start();
unset($_SESSION['username']);
echo 'Привет, '.$_SESSION['username'];
/* Тепер ім`я користувача вже не виводиться */
session_destroy();
?>