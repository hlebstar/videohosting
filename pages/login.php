<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход — VideoLA</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="auth-page">

<header class="hd">
    <div class="hd-in">
        <a href="index.php" class="logo">
            <span class="logo-icon"></span> VideoLA
        </a>
    </div>
</header>

<main class="main">
<div class="form-box">
    <h1 class="ttl">
        Вход
    </h1>

    <form id="login-form" class="form" method="post" action="">

        <div class="f-group">
            <label class="f-lbl">Логин или Email</label>
            <input type="text" name="login" id="login" class="f-in" required>
            <span class="f-err" id="err-login"></span>
        </div>

        <div class="f-group">
            <label class="f-lbl">Пароль</label>
            <input type="password" name="pass" id="pass" class="f-in" required>
            <span class="f-err" id="err-pass"></span>
        </div>
        
        <button type="submit" class="btn">Войти</button>
    </form>

    <p class="form-link">Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>
</div>

</main>
<script src="../assets/js/login.js"></script>
</body>
</html>