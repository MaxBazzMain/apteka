<?php

require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass))
{
    echo "Заполните все поля";
    header("Location:../index.html");
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "Добро пожаловать, " . $row['login'],'!';
            header("Location:../index.html");
        }
    } else {
        echo "Пользователь не зарегестрирован или пароль неверен";
        header("Location:../login.html");
    }

}
?>