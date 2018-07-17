<?php
$mysqli = new mysqli("localhost", "ese","ese");
if($mysqli=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$myArray = array();

if ($result = $mysqli->query("SELECT * FROM elevator.elevatorNetwork")) {

while($row = $result->fetch_assoc()){
            $myArray[] = $row;
	}
}
echo json_encode($myArray);
$result->close();
$mysqli->close();
?>
