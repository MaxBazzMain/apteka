<?
$servername = "MySQL-8.2";
$username = "root";
$password = "";
$dbname = "registeredUsers";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection Failed". mysqli_connect_error());
} else {
    
}
?>