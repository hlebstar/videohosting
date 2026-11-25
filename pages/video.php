<?php
session_start();
$id = $_GET['id'] ?? 0;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр видео — VideoHost</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header class="hd">
    <div class="hd-in">
        <a href="index.php" class="logo">VideoHost</a>
        <nav class="nav">
            <a href="index.php" class="nav-l">Главная</a>
            <a href="my-videos.php" class="nav-l">Мои видео</a>
            <a href="upload.php" class="nav-l">Загрузить</a>
            <a href="login.php" class="nav-l">Вход</a>
        </nav>
    </div>
</header>

<main class="main">
    <div class="vid-page">
        <div class="player">
            <video controls class="player-vid">
                <source src="" type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
        </div>

        <div class="vid-head">
            <h1 class="vid-name">Название видео</h1>
            <div class="vid-stats">
                <span id="likes">0</span> лайков ·
                <span id="dislikes">0</span> дизлайков ·
                <span id="date">01.01.2026</span>
            </div>
            <div class="vid-actions">
                <button class="btn-act" id="btn-like">👍 Лайк</button>
                <button class="btn-act" id="btn-dislike">👎 Дизлайк</button>
            </div>
        </div>

        <p class="vid-desc">Описание видео появится здесь.</p>

        <section class="comments">
            <h2 class="ttl-sm">Комментарии</h2>

            <form id="com-form" class="com-form">
                <textarea id="com-text" class="f-in f-ta" placeholder="Написать комментарий..." rows="3"></textarea>
                <span class="f-err" id="err-com"></span>
                <button type="submit" class="btn btn-sm">Отправить</button>
            </form>

            <div class="com-list" id="com-list">
                <div class="com-item">
                    <strong class="com-user">user1</strong>
                    <span class="com-date">01.01.2026</span>
                    <p class="com-text">Пример комментария</p>
                </div>
            </div>
        </section>
    </div>
</main>

<footer class="ft">
    <p>© 2026 VideoHost</p>
</footer>

<script src="../assets/js/video.js"></script>
</body>
</html>