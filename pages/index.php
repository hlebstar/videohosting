<?php

session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ВидеоХостинг</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header class="hd">
    <div class="hd-in">
        <a href="index.php" class="logo">VideoHost</a>
        
        <form class="srch" action="index.php" method="get">
            <input type="text" name="q" placeholder="Поиск..." class="srch-in">
            <button type="submit" class="srch-btn">Найти</button>
        </form>

        <nav class="nav">
            <a href="my-videos.php" class="nav-l">Мои видео</a>
            <a href="upload.php" class="nav-l">Загрузить</a>
            <a href="login.php" class="nav-l">Вход</a>
            <a href="register.php" class="nav-l">Регистрация</a>
        </nav>
    </div>
</header>

<main class="main">
    <h1 class="ttl">Последние видео</h1>
    
    <div class="vid-list">
    <a href="video.php?id=1" class="vid-card">
        <div class="vid-thumb">Нет превью</div>
        <div class="vid-info">
            <h3 class="vid-title">Пример видео</h3>
            <p class="vid-meta">user1 · 0 просмотров</p>
        </div>
    </a>
</div>
</main>

<footer class="ft">
    <p>© 2026 VideoHost</p>
</footer>

<script src="../assets/js/main.js"></script>
</body>
</html>