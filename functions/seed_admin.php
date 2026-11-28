<?php

require_once __DIR__ . '/database.php';

$pdo = getDB();

$stmt = $pdo->prepare("SELECT id FROM users WHERE login = ?");
$stmt->execute(['admin']);

if (!$stmt->fetch()) {
    $hash = password_hash('oiSD$83s4Fda23d_S23', PASSWORD_DEFAULT);
    
   
    $pdo->prepare("INSERT INTO users (login, email, password, role) VALUES(?, ?, ?, ?)")
    ->execute(['admin', 'admin@videola.ru', $hash, 'admin']);

    echo "Админ создан: login=admin, password=oiSD\$83s4Fda23d_S23\n";
} else {
    echo "Админ уже есть!\n";
}