<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация — VideoHost</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header class="hd">
    <div class="hd-in">
        <a href="index.php" class="logo">
            <span class="logo-icon"></span> VideoLA
        </a>
    </div>
</header>

<main class="main">
    <div class="form-box">
        <h1 class="ttl">Регистрация</h1>
        
        <form id="reg-form" class="form" method="post" action="">
            <div class="f-group">
                <label class="f-lbl">Логин</label>
                <input type="text" name="login" id="login" class="f-in" required>
                <span class="f-err" id="err-login"></span>
            </div>

            <div class="f-group">
                <label class="f-lbl">Email</label>
                <input type="email" name="email" id="email" class="f-in" required>
                <span class="f-err" id="err-email"></span>
            </div>

            <div class="f-group">
                <label class="f-lbl">Пароль</label>
                <input type="password" name="pass" id="pass" class="f-in" required>
                <span class="f-err" id="err-pass"></span>
            </div>

            <div class="f-group">
                <label class="f-lbl">Повторите пароль</label>
                <input type="password" name="pass2" id="pass2" class="f-in" required>
                <span class="f-err" id="err-pass2"></span>
            </div>

            <button type="submit" class="btn">Зарегистрироваться</button>
        </form>

        <p class="form-link">Уже есть аккаунт? <a href="login.php">Войти</a></p>
    </div>
</main>

<script src="../assets/js/register.js"></script>
</body>
</html>