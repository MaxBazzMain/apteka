<?
session_start();
require_once('db.php');
$midicinItem_Id = $_POST['midicinItem_Id'];
$user = $_SESSION['login'];


// $midicinItem_id  = $_POST['$midicinItem'];
// $midicinItem_id = $_SESSION["midicinItem_id"];
// echo $midicinItem_Id;



$test=1;
$sql = "INSERT INTO `basket` (user_name,id_medicine,medicine_quantity) VALUES ('$user', '$midicinItem_Id', '$test')";
if ($conn -> query($sql) === TRUE){
    // echo "$midicinItem['medicine_name']";
    header("Location:../registered.php");
    }
    else {
        echo "Ошибка: " . $conn->error;
        header("Location:../login.php");
    }
?>