<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // свой пароль

try {
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = file_get_contents(__DIR__ . '/../sql/schema.sql');
    $pdo->exec($sql);

    echo "База videola создана успешно\n";
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}