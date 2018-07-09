<?php
$link = mysqli_connect("localhost", "ese","ese");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO elevator.elevatorNetwork (currentFloor) VALUES 
    ('$_POST[FloorNumber]')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
