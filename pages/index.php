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
            VideoLA
        </a>

        <form class="srch" action="index.php" method="get">
            <input type="text" name="q" placeholder="Поиск видео..." class="srch-in">
            <button type="submit" class="srch-btn">Найти</button>
        </form>

        <div class="hd-actions">
            <a href="login.php" class="btn-out">Вход</a>
            <a href="register.php" class="btn-in">Регистрация</a>
        </div>
    </div>
</header>

<section class="hero-banner">
    <div class="hero-bg" style="background-image: url('https://i.pinimg.com/736x/05/e3/ea/05e3ea8567d4a2a786673adbc319a231.jpg');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">Добро пожаловать на VideoLA</h1>
        <p class="hero-subtitle"> С нашим сервисом вы легко сможете смотреть, загружать и так же оставлять своё мнение к каждому видео</p>
        <a href="upload.php" class="hero-btn">Загрузить видео</a>
    </div>
</section>



<section class="slider-section">
     <h1 class="hero-title2">Галерея о нас</h1>
    <div class="carousel">
        <button class="carousel-btn prev" id="slider-prev">‹</button>

        <div class="carousel-viewport">
            <div class="carousel-track" id="slider-track">
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=340&fit=crop" alt="slide">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=600&h=340&fit=crop" alt="slide">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=600&h=340&fit=crop" alt="slide">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=600&h=340&fit=crop" alt="slide">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?w=600&h=340&fit=crop" alt="slide">
                </div>
            </div>
        </div>

        <button class="carousel-btn next" id="slider-next">›</button>
    </div>

    <div class="carousel-dots" id="slider-dots"></div>
</section>

<main class="main">
    <h1 class="ttl">Последние видео</h1>
    <div class="vid-list">
     
        <a href="video.php?id=2" class="vid-card">
            <div class="vid-thumb-wrap">
                <div class="vid-thumb no-img"><span>Нет превью</span></div>
                <span class="vid-duration">0:00</span>
            </div>
            <div class="vid-info">
                <div class="vid-avatar"></div>
                <div class="vid-meta-text">
                    <h3 class="vid-title">Пример видео</h3>
                    <p class="vid-author">user1</p>
                    <p class="vid-stats">0 просмотров · только что</p>
                </div>
            </div>
        </a>

           <a href="video.php?id=2" class="vid-card">
            <div class="vid-thumb-wrap">
                <div class="vid-thumb no-img"><span>Нет превью</span></div>
                <span class="vid-duration">0:00</span>
            </div>
            <div class="vid-info">
                <div class="vid-avatar"></div>
                <div class="vid-meta-text">
                    <h3 class="vid-title">Пример видео</h3>
                    <p class="vid-author">user1</p>
                    <p class="vid-stats">0 просмотров · только что</p>
                </div>
            </div>
        </a>


           <a href="video.php?id=2" class="vid-card">
            <div class="vid-thumb-wrap">
                <div class="vid-thumb no-img"><span>Нет превью</span></div>
                <span class="vid-duration">0:00</span>
            </div>
            <div class="vid-info">
                <div class="vid-avatar"></div>
                <div class="vid-meta-text">
                    <h3 class="vid-title">Пример видео</h3>
                    <p class="vid-author">user1</p>
                    <p class="vid-stats">0 просмотров · только что</p>
                </div>
            </div>
        </a>


           <a href="video.php?id=2" class="vid-card">
            <div class="vid-thumb-wrap">
                <div class="vid-thumb no-img"><span>Нет превью</span></div>
                <span class="vid-duration">0:00</span>
            </div>
            <div class="vid-info">
                <div class="vid-avatar"></div>
                <div class="vid-meta-text">
                    <h3 class="vid-title">Пример видео</h3>
                    <p class="vid-author">user1</p>
                    <p class="vid-stats">0 просмотров · только что</p>
                </div>
            </div>
        </a>


           <a href="video.php?id=2" class="vid-card">
            <div class="vid-thumb-wrap">
                <div class="vid-thumb no-img"><span>Нет превью</span></div>
                <span class="vid-duration">0:00</span>
            </div>
            <div class="vid-info">
                <div class="vid-avatar"></div>
                <div class="vid-meta-text">
                    <h3 class="vid-title">Пример видео</h3>
                    <p class="vid-author">user1</p>
                    <p class="vid-stats">0 просмотров · только что</p>
                </div>
            </div>
        </a>
    </div>
</main>

<footer class="ft">
    <p>© 2026 VideoLA</p>
</footer>

<script src="../assets/js/main.js"></script>
</body>
</html>