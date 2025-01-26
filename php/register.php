<?php
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)){
    echo "Заполните все поля";
    header("Location:../login.html");
    } else 
    {
       if($pass != $repeatpass){
           echo "Пароли не совпадают";
       } else { 
            $sql = "SELECT * FROM `users` WHERE login = '$login'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "Такой пользователь уже зарегестрирован";
                header("Location:../login.html");
            } else {
                $sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass', '$email')";
                if ($conn -> query($sql) === TRUE){
                echo "Успешная регистрация";
                header("Location:../index.html");
                }
                else {
                    echo "Ошибка: " . $conn->error;
                    header("Location:../login.html");
                }
            }
           
        }
    }
?>