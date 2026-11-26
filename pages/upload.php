<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>загрузка видео</title>
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

<main class="main studio-main">
    <div class="studio-header">
        <h1 class="ttl">Сведения о видео</h1>
        <div class="studio-actions">
            <button type="button" class="btn-out" style="color: #666; padding: 8px 16px;">Отменить изменения</button>
            <button type="submit" form="up-form" class="btn btn-studio">Сохранить</button>
        </div>
    </div>

    <form id="up-form" class="form studio-form" method="post" enctype="multipart/form-data" action="">
        <div class="studio-grid">
            
            <div class="studio-col-left">
                <div class="studio-card">
                    <div class="f-group">
                        <label class="f-lbl">Название <span style="color:#888; cursor:help;" title="Название должно быть понятным"></span></label>
                        <input type="text" name="title" id="title" class="f-in studio-input" placeholder="Добавьте название, которое описывает ваше видео" required>
                        <span class="f-err" id="err-title"></span>
                    </div>

                    <div class="f-group" style="margin-top: 16px;">
                        <label class="f-lbl">Описание <span style="color:#888; cursor:help;" title="Расскажите о видео"></span></label>
                        <textarea name="desc" id="desc" class="f-in f-ta studio-textarea" rows="6" placeholder="Расскажите зрителям о своем видео"></textarea>
                        <span class="f-err" id="err-desc"></span>
                    </div>


                    <div class="f-group">
                        <label class="f-lbl">Плейлисты</label>
                        <p style="font-size: 13px; color: #666; margin-bottom: 8px;">Добавьте видео хотя бы в один плейлист, чтобы зрителям было удобнее ориентироваться на вашем канале.</p>
                        <select name="playlist" id="playlist" class="f-in studio-input">
                            <option value="">Выберите плейлист</option>
                            <option value="1">Мои любимые моменты</option>
                            <option value="2">Обучение</option>
                        </select>
                    </div>
                    
                    <div class="f-group" style="margin-top: 16px;">
                        <label class="f-lbl">Категория</label>
                        <select name="cat" id="cat" class="f-in studio-input" required>
                            <option value="">Выберите категорию</option>
                            <option value="1">Музыка</option>
                            <option value="2">Игры</option>
                            <option value="3">Образование</option>
                            <option value="4">Развлечения</option>
                            <option value="5">Спорт</option>
                        </select>
                        <span class="f-err" id="err-cat"></span>
                    </div>
                </div>

                
            </div>

            <div class="studio-col-right">
                <div class="studio-card studio-preview-card">
                    <div class="preview-container" id="video-preview-container">
                        <div class="preview-placeholder">Превью не выбрано</div>
                    </div>
                    
                    <div class="file-info">
                        <p><strong>Ссылка на видео:</strong><br> <a href="#" id="video-link">https://videola.ru/watch/...</a></p>
                        <p><strong>Имя файла:</strong><br> <span id="file-name">не выбран</span></p>
                    </div>

                    <div class="f-group" style="margin-top: 16px;">
                        <label class="f-lbl">Видеофайл (.mp4)</label>
                        <input type="file" name="video" id="video" class="f-in studio-file-input" accept="video/mp4" required>
                        <span class="f-err" id="err-video"></span>
                    </div>
                </div>

                <div class="studio-card settings-card">
                    <div class="settings-item">
                        <div>
                            <span style="font-weight: 500;">Комментарии и уведомления</span><br>
                            <span style="color: #e74c3c; font-size: 12px;">Выключены</span>
                        </div>
                        <span>></span>
                    </div>
                    <div class="settings-item">
                        <span style="font-weight: 500;">Параметры доступа</span>
                        <span>По ссылке v</span>
                    </div>
                </div>
            </div>

        </div>
    </form>
</main>

<script src="../assets/js/upload.js"></script>
</body>
</html>