<?php
session_start();
// Разлогиниваем пользователя путем удаления всех данных сессии
session_unset();
session_destroy();
// Перенаправляем пользователя на страницу входа
header("Location: ../index.php");
exit();
?>