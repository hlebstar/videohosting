<?php
session_start();
// позже здесь будет проверка: если не авторизован → редирект на login
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка видео — VideoHost</title>
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
    
        <h1 class="ttl">Загрузить видео</h1>
        
        <form id="up-form" class="form" method="post" enctype="multipart/form-data" action="">
            <div class="f-group">
                <label class="f-lbl">Название</label>
                <input type="text" name="title" id="title" class="f-in" required>
                <span class="f-err" id="err-title"></span>
            </div>

            <div class="f-group">
                <label class="f-lbl">Описание</label>
                <textarea name="desc" id="desc" class="f-in f-ta" rows="4"></textarea>
                <span class="f-err" id="err-desc"></span>
            </div>

            <div class="f-group">
                <label class="f-lbl">Категория</label>
                <select name="cat" id="cat" class="f-in" required>
                    <option value="">Выберите категорию</option>
                    <option value="1">Музыка</option>
                    <option value="2">Игры</option>
                    <option value="3">Образование</option>
                    <option value="4">Развлечения</option>
                    <option value="5">Спорт</option>
                </select>
                <span class="f-err" id="err-cat"></span>
            </div>

            <div class="f-group">
                <label class="f-lbl">Видеофайл (.mp4)</label>
                <input type="file" name="video" id="video" class="f-in" accept="video/mp4" required>
                <span class="f-err" id="err-video"></span>
            </div>

            <button type="submit" class="btn">Загрузить</button>
        </form>
    
</main>

<script src="../assets/js/upload.js"></script>
</body>
</html>