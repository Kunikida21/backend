<?php
// Подключение к базе данных
$db_host = 'localhost';
$db_name = 'my_database';
$db_user = 'root';
$db_pass = '';

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
    exit;
}
