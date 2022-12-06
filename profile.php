<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/profile_styles.css">
</head>
<body>

    <!-- Профиль -->

    <form id="profile_form">
        <img src="images/avatar/ava.jpg" width="200" alt="" class="avatar">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a id="profile_email" href="#"><?= $_SESSION['user']['email'] ?></a>
        <p>Your id: <?= $_COOKIE['id'] ?></p>
        <a id="exit" href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>
