<?php

$floor = $_POST["FloorNumber"];
$link = mysqli_connect("localhost", "ese","ese");
$sql = "UPDATE elevator.elevatorNetwork SET 
    requestedFloor=$floor WHERE nodeID=1";
mysqli_query($link, $sql);
mysqli_close($link);
?>
