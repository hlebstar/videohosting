<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>вход</title>
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
    <h1 class="ttl">
        Вход
    </h1>

    <form id="login-form" class="form" method="post" action="">

<div class="f-group">
    <label class="f-group">Логин или Email</label>
    <input type="text" name="login" id="login" class="f-in" required>
    <span class="f-err" id="err-login"></span>
</div>

<div class="f-group">
    <label class="f-ldl">пароль</label>
    <input type="password" name="pass" id="pass" class="f-in" required>
    <span class="f-err" id="err-pass"></span>
</div>
<button type="submit" class="btn">войти</button>
    </form>

    <p class="form-link">нет акаунта?</p>
    <a href="register.php">зарегестрирвоатся</a>
</div>

</main>
<script src="../assets/js/login.js"></script>
</body>
</html>