<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель — VideoLA</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="admin-body">

<div class="admin-layout">
    <aside class="admin-sidebar">
        <div class="sidebar-logo">
            <a href="index.php"> VideoLA</a>
        </div>

        <div class="sidebar-user">
            <div class="sidebar-avatar"></div>
            <div>
                <strong>admin</strong>
                <span>Администратор</span>
            </div>
        </div>

        <nav class="sidebar-nav">
            <a href="#" class="sidebar-link active" data-tab="videos">
                <span></span> Видео
            </a>
            <a href="#" class="sidebar-link" data-tab="users">
                <span></span> Пользователи
            </a>
            <a href="#" class="sidebar-link" data-tab="cats">
                <span></span> Категории
            </a>
            
            <a href="login.php" class="sidebar-link sidebar-exit">
                <span></span> Выход
            </a>
        </nav>
    </aside>

    <div class="admin-content">
        <header class="admin-top">
            <h1 class="ttl" id="admin-title">Видео</h1>
        </header>

        <section id="tab-videos" class="tab-content">
            <div class="admin-card">
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
                        <tr>
                            <td>2</td>
                            <td>Ещё одно видео</td>
                            <td>user2</td>
                            <td>
                                <select class="status-sel" data-id="2">
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
            </div>
        </section>

        <section id="tab-users" class="tab-content" style="display:none;">
            <div class="admin-card">
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
                        <tr>
                            <td>2</td>
                            <td>user1</td>
                            <td>user1@test.ru</td>
                            <td>Пользователь</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section id="tab-cats" class="tab-content" style="display:none;">
            <div class="admin-card">
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Музыка</td></tr>
                        <tr><td>2</td><td>Игры</td></tr>
                        <tr><td>3</td><td>Образование</td></tr>
                        <tr><td>4</td><td>Развлечения</td></tr>
                        <tr><td>5</td><td>Спорт</td></tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

<script src="../assets/js/admin.js"></script>
</body>
</html>