<?php

require_once('./php/db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass))
{
    echo "Заполните все поля";
    header("Location:./login.php");
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            $user = $row['login'];
            // echo $user;
            session_start();
            $_SESSION['login'] = $row['login'];
            $_SESSION['password'] = $row['pass'];
            header("Location:./registered.php");
        }
    } else {
        echo "Пользователь не зарегестрирован или пароль неверен";
        header("Location:./login.php");
    }
    

}
?>