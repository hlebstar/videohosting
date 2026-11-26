<?php
session_start();

// ЕСЛИ ПОЛЬЗОВАТЕЛЬ НЕ ВОШЕЛ  ПЕРЕНАПРАВЛЯЕМ НА ВХОД ДЛЯ ПУНКТА 3 В БУУДЩЕМ 
// if (!isset($_SESSION['user_id'])) {
//     header('Location: login.php');
//     exit;
// }

// Загл для демонстрации
if (!isset($_SESSION['user_name'])) {
    $_SESSION['user_name'] = 'хлебушек';
    $_SESSION['user_email'] = 'user@example.com';
    $_SESSION['user_id'] = 1;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои видео — VideoLA</title>
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
            <a href="upload.php" class="nav-l">Загрузить</a>
        </nav>

        <div class="hd-actions">
            <div class="user-menu">
                <button class="user-avatar-btn" id="user-menu-btn">
                    <div class="avatar-mini"></div>
                </button>
                <div class="user-dropdown" id="user-dropdown">
                    <div class="dropdown-header">
                        <strong><?= htmlspecialchars($_SESSION['user_name']) ?></strong>
                        <span><?= htmlspecialchars($_SESSION['user_email']) ?></span>
                    </div>
                    <a href="my-videos.php" class="dropdown-item">Мои видео</a>
                    <hr class="dropdown-divider">
                    <a href="logout.php" class="dropdown-item text-danger">Выйти</a>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="main" style="max-width: 1200px; padding: 0 20px;">
    
    <div class="channel-header">
        <div class="channel-avatar"></div>
        <div class="channel-info">
            <h1 class="channel-name"><?= htmlspecialchars($_SESSION['user_name']) ?></h1>
            <p class="channel-handle">@<?= htmlspecialchars($_SESSION['user_name']) ?>-<?= $_SESSION['user_id'] ?> · <a href="#" style="color:#606060; text-decoration:none;">Перейти на канал</a></p>
            
        </div>
    </div>

    <div class="section-header">
        <h2 class="section-title">История</h2>
        <a href="#" class="view-all-link">Посмотреть все</a>
    </div>
    <div class="history-grid">
        <a href="video.php?id=1" class="vid-card">
            <div class="vid-thumb-wrap">
                <div class="vid-thumb no-img"><span>Превью</span></div>
                <span class="vid-duration">21:17</span>
            </div>
            <div class="vid-info">
                <div class="vid-avatar"></div>
                <div class="vid-meta-text">
                    <h3 class="vid-title">ЧТО МОЖЕТ САМЫЙ ДЕШЕВЫЙ iPad</h3>
                    <p class="vid-author">AFaGP</p>
                    <p class="vid-stats">293 тыс. просмотров · 12 дн. назад</p>
                </div>
            </div>
        </a>
       
    </div>

    <div class="studio-table-section">
        <div class="studio-table-header">
            <div class="filter-box">
                <span class="filter-icon">≡</span>
                <input type="text" id="video-search" placeholder="Фильтр по названию..." class="filter-input">
            </div>
        </div>

        <table class="studio-table">
            <thead>
                <tr>
                    <th style="width: 40px;"><input type="checkbox"></th>
                    <th>Видео</th>
                    <th>Уведомления</th>
                    <th>Доступ</th>
                    <th>Дата </th>
                    <th>Просмотры</th>
                    <th>Комментарии</th>
                </tr>
            </thead>
            <tbody id="video-table-body">
            
                <tr>
                    <td><input type="checkbox"></td>
                    <td>
                        <div class="table-vid-item">
                            <div class="table-thumb"><span class="table-dur">0:13</span></div>
                            <div class="table-vid-info">
                                <div class="table-vid-title">Баг №4, «Счетчик орешков после смерти остается с таким же количеством»</div>
                                <div class="table-vid-desc">Задание №2. Громоздова Екатерина</div>
                            </div>
                        </div>
                    </td>
                    <td><span style="color:#e74c3c;">⚠Комментарии отключены</span></td>
                    <td><span style="color:#666;"> По ссылке</span></td>
                    <td><div style="color:#222;">21 мар. 2026 г.</div><div style="font-size:12px; color:#888;">Загружено</div></td>
                    <td>1</td>
                    <td>0</td>
                </tr>
               
                <tr>
                    <td><input type="checkbox"></td>
                    <td>
                        <div class="table-vid-item">
                            <div class="table-thumb"><span class="table-dur">0:11</span></div>
                            <div class="table-vid-info">
                                <div class="table-vid-title">Баг №6, «Персонаж скрывается за ёлкой и мгновенно появляется»</div>
                                <div class="table-vid-desc">Задание №2. Громоздова Екатерина</div>
                            </div>
                        </div>
                    </td>
                    <td><span style="color:#e74c3c;"> Комментарии отключены</span></td>
                    <td><span style="color:#666;"> По ссылке</span></td>
                    <td><div style="color:#222;">2 мар. 2026 г.</div><div style="font-size:12px; color:#888;">Загружено</div></td>
                    <td>1</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
        
        <div class="table-footer">
            <span>Строк на странице: <select><option>30</option></select> · 1–3 из 3</span>
        </div>
    </div>

</main>

<footer class="ft">
    <p>© 2026 VideoLA</p>
</footer>

<script src="../assets/js/my-videos.js"></script>
</body>
</html>