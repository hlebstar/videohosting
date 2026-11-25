<?php
session_start();
// позже: проверка роли admin
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель — VideoHost</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header class="hd">
    <div class="hd-in">
        <a href="index.php" class="logo">VideoHost</a>
        <nav class="nav">
            <a href="index.php" class="nav-l">Главная</a>
            <a href="admin.php" class="nav-l">Админка</a>
            <a href="login.php" class="nav-l">Выход</a>
        </nav>
    </div>
</header>

<main class="main">
    <h1 class="ttl">Админ-панель</h1>

    <div class="admin-tabs">
        <button class="tab active" data-tab="videos">Видео</button>
        <button class="tab" data-tab="users">Пользователи</button>
    </div>

    <!-- Список видео -->
    <section id="tab-videos" class="tab-content">
        <table class="tbl">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Автор</th>
                    <th>Статус</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody id="vid-table">
                <tr>
                    <td>1</td>
                    <td>Пример видео</td>
                    <td>user1</td>
                    <td>
                        <select class="status-sel" data-id="1">
                            <option value="none">нет ограничений</option>
                            <option value="violation">нарушение</option>
                            <option value="shadow">теневой бан</option>
                            <option value="ban">бан</option>
                        </select>
                    </td>
                    <td><button class="btn-sm btn-save">Сохранить</button></td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Список пользователей -->
    <section id="tab-users" class="tab-content" style="display:none;">
        <table class="tbl">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Логин</th>
                    <th>Email</th>
                    <th>Роль</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>admin@test.ru</td>
                    <td>Админ</td>
                </tr>
            </tbody>
        </table>
    </section>
</main>

<footer class="ft">
    <p>© 2026 VideoHost</p>
</footer>

<script src="../assets/js/admin.js"></script>
</body>
</html>