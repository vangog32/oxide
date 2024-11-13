<?php
// Получаем IP-адрес пользователя
$user_ip = $_SERVER['REMOTE_ADDR'];

// Указываем путь к файлу, в который будут записываться IP-адреса
$file = 'ips.txt';

// Записываем IP в файл
file_put_contents($file, "IP: $user_ip\n", FILE_APPEND);

// Перенаправляем пользователя на другую страницу (опционально)
header('Location: thank_you.html');
exit;
?>
