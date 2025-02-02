<?php
require_once('db.php');

$sql ="SELECT * FROM `medicine`";
$result = $conn->query($sql);

$midicinItems = array();

while ($midicineInfo = $result->fetch_assoc()) {
    $midicinItems[] = $midicineInfo;
}

?>