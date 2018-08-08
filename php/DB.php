<?php
class DB{

	public function Insert(){

	$link = mysqli_connect("localhost", "ese","ese");
	$sql = "INSERT INTO Elevator.elevatorNodes(nodeID,status,currentfloor,otherinfo) VALUES ('$nodeID', '$status', '$currentfloor', '$otherinfo')";
	mysqli_close($link);

	}

	public function  Display(){


	}
	public function Modify(){


	}
	public function Remove(){

	}
}
?>
