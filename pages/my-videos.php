<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои видео — VideoHost</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header class="hd">
    <div class="hd-in">
        <a href="index.php" class="logo">VideoHost</a>
        <nav class="nav">
            <a href="my-videos.php" class="nav-l">Мои видео</a>
            <a href="upload.php" class="nav-l">Загрузить</a>
            <a href="login.php" class="nav-l">Вход</a>
        </nav>
    </div>
</header>

<main class="main">
    <div class="page-hd">
        <h1 class="ttl">Мои видео</h1>
        <a href="upload.php" class="btn btn-sm">+ Загрузить</a>
    </div>

    <div class="vid-list" id="my-list">
        <div class="vid-card">
    <a href="video.php?id=1" class="vid-thumb">Нет превью</a>
    <div class="vid-info">
        <h3 class="vid-title">
            <a href="video.php?id=1">Пример видео</a>
        </h3>
        <p class="vid-meta">0 лайков · статус: нет ограничений</p>
        <div class="vid-actions">
            <button class="btn-act btn-del" data-id="1">Удалить</button>
        </div>
    </div>
</div>
        </div>

        <p class="empty" style="display:none;">У вас пока нет видео</p>
    </div>
</main>

<footer class="ft">
    <p>© 2026 VideoHost</p>
</footer>

<script src="../assets/js/my-videos.js"></script>
</body>
</html>