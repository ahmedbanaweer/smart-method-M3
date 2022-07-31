<?php
$conn = mysqli_connect('localhost','id19342687_smartmethods','0987654321Aa!','id19342687_smartmethod') or die("Connection failed");

$sensorValue = $_GET['sensor'];
$query = "INSERT INTO sens (idSensor, sensorValue) VALUES (NULL, $sensorValue)";

$result = $conn->query($query);
    if ($result === FALSE) {
        
    print("Error");
    
    }else{
        print("The value has been added successfully"); 

}
?>