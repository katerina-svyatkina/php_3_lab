<?php

    session_start();
    require_once 'connect.php';

    if (isset($_POST['login']) and isset($_POST['pass'])) {

        $full_name = $_POST['name'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $repeat_password = $_POST['pass'];

        if ($password === $repeat_password) {


            mysqli_query($connect, "INSERT INTO `users` (`login`, `pass`, `name`, `email`) VALUES ('$login', '$password', '$full_name', '$email')");

            echo 'Регистрация прошла успешно!' . '<br>';
            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../index.php');


        } else {
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: ../registration.php');
        }
    }
?>