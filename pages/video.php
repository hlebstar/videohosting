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
            <a href="my-videos.php" class="nav-l">Мои видео</a>
            <a href="upload.php" class="nav-l">Загрузить</a>
            <a href="login.php" class="nav-l">Вход</a>
        </nav>
    </div>
</header>



<main class="main">
    <div class="watch-layout">
        
        <div class="watch-main">
            <div class="player">
                <video controls class="player-vid" poster="">
                    <source src="" type="video/mp4">
                    Ваш браузер не поддерживает видео.
                </video>
            </div>

            <div class="vid-head">
                <h1 class="vid-name">Название видео</h1>
                
                <div class="streamer-info">
                    <div class="avatar"></div>
                    <div class="streamer-meta">
                        <div class="streamer-name">username</div>
                        <div class="streamer-cat">Категория</div>
                    </div>
                    <button class="btn-sub">Подписаться</button>
                </div>

                <div class="vid-stats-bar">
                    <div class="stats-left">
                        <span id="likes">0</span> лайков ·
                        <span id="dislikes">0</span> дизлайков
                    </div>
                    <div class="vid-actions">
                        <button class="btn-act" id="btn-like">Лайк</button>
                        <button class="btn-act" id="btn-dislike"> Дизлайк</button>
                    </div>
                </div>
            </div>

            <div class="vid-desc-box">
                <h3 class="ttl-sm">Описание</h3>
                <p class="vid-desc">Описание видео появится здесь.</p>
            </div>
        </div>

        <!-- Правая колонка — комментарии -->
        <div class="watch-side">
            <div class="chat-header">
                <h2>Комментарии</h2>
            </div>
            
            <div class="chat-list" id="com-list">
                <div class="chat-msg">
                    <span class="chat-user">user1</span>
                    <span class="chat-text">Пример комментария</span>
                </div>
            </div>

            <div class="chat-input-area">
                <form id="com-form" class="chat-form">
                    <input type="text" id="com-text" class="chat-input" placeholder="Написать комментарий..." autocomplete="off">
                    <button type="submit" class="chat-send-btn">➤</button>
                </form>
                <span class="f-err" id="err-com"></span>
            </div>
        </div>

    </div>
</main>

<script src="../assets/js/video.js"></script>
</body>
</html>