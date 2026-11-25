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
        <a href="index.php" class="logo">
            <span class="logo-icon"></span> VideoLA
        </a>

        <form class="srch" action="index.php" method="get">
            <input type="text" name="q" placeholder="Поиск видео..." class="srch-in">
            <button type="submit" class="srch-btn">Найти</button>
        </form>

        <nav class="nav">
            <a href="my-videos.php" class="nav-l">Мои видео</a>
            <a href="upload.php" class="nav-l">Загрузить</a>
        </nav>

        <div class="hd-actions">
            <a href="login.php" class="btn-out">Вход</a>
            <a href="register.php" class="btn-in">Регистрация</a>
        </div>
    </div>
</header>

<main class="main">
    <h1 class="ttl">Последние видео</h1>
    
    <div class="vid-list">
      
        <a href="video.php?id=1" class="vid-card">
            <div class="vid-thumb-wrap">
          
                <div class="vid-thumb">
                    <img src="" alt="Превью" onerror="this.style.display='none'; this.parentElement.classList.add('no-img');">
                </div>
                <span class="vid-duration">18:56</span>
            </div>
            <div class="vid-info">
                <div class="vid-avatar"></div>
                <div class="vid-meta-text">
                    <h3 class="vid-title">Почему ВСЕ берут MacBook Neo вместо Windows?</h3>
                    <p class="vid-author">Overtake lab <span>v</span></p>
                    <p class="vid-stats">156 тыс. просмотров · 4 мес. назад</p>
                </div>
                <button class="vid-more" onclick="event.preventDefault();">⋮</button>
            </div>
        </a>

        <a href="video.php?id=2" class="vid-card">
            <div class="vid-thumb-wrap">
                <div class="vid-thumb no-img">
                    <span>Нет превью</span>
                </div>
                <span class="vid-duration">0:00</span>
            </div>
            <div class="vid-info">
                <div class="vid-avatar"></div>
                <div class="vid-meta-text">
                    <h3 class="vid-title">Пример видео</h3>
                    <p class="vid-author">user1</p>
                    <p class="vid-stats">0 просмотров · только что</p>
                </div>
                <button class="vid-more" onclick="event.preventDefault();">⋮</button>
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