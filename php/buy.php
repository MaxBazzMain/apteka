<?
// session_start();
require_once('db.php');


$midicinItem_id  = $_POST['$midicinItem'];
echo $midicinItem_id;



$test=1;
$sql = "INSERT INTO `basket` (id_user,id_medicine,medicine_quantity) VALUES ('$test', '$test', '$test')";
if ($conn -> query($sql) === TRUE){
    // echo "$midicinItem['medicine_name']";
    // header("Location:../registered.php");
    }
    else {
        echo "Ошибка: " . $conn->error;
        header("Location:../login.php");
    }
?>