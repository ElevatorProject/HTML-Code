<?php
require_once('Node.php');

class Elevator extends Node{

   //  public $idNumber;

    public function getID(){

    }
    public function getFloor(){

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
    }

    public function setFloor(int $floor){
	    echo $floor;
	    if($floor == 1){
		    Node::firstFloor();
	    }if($floor == 2){
		    Node::secondFloor();
	    }if($floor == 3){
		    Node::thirdFloor();
	    }
    }
}

$obj = new Elevator();
$obj->setFloor(3);
?>
