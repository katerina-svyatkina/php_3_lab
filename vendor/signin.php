<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['pass'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];

        setcookie("login", $user['login'], time() + 3600, "/");
        setcookie("pass", $user['pass'], time() + 3600, "/");
        setcookie("id", $user['id'], time() + 3600, "/");
        setcookie("name", $user['name'], time() + 3600, "/");
        setcookie("email", $user['email'], time() + 3600, "/");

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
    ?>