<?php
session_start();
$user = $_SESSION['login'];
require_once('db.php');

$sql ="SELECT * FROM `basket` WHERE user_name='$user'";
$result = $conn->query($sql);

$userItems = array();

while ($userInfo = $result->fetch_assoc()) {
    $userItems[] = $userInfo;
}

$midicinItems = array();

foreach ($userItems as $userItem):
    $sql ="SELECT * FROM `medicine` WHERE id ='$userItem[id_medicine]'";
    $result = $conn->query($sql);
    while ($midicineInfo = $result->fetch_assoc()) {
        $midicinItems[] = $midicineInfo;
    }
endforeach  




?>