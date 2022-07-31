<?php

$conn = mysqli_connect('localhost','id19342687_smartmethods','0987654321Aa!','id19342687_smartmethod') or die("Connection failed");
$sql = "SELECT idSensor,sensorValue FROM sens";

$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error in query");
}

while ($row = mysqli_fetch_assoc($result)) {
    echo 'id: ' . $row['idSensor'] . ' sensor Value:'  .  $row['sensorValue'] .'<br/>' ;
}

