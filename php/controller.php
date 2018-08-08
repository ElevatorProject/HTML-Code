<?php
require_once('Node.php');

class Elevator extends Node{

   //  public $idNumber;

    public function getID(){

	    return 1;
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

	    try{

	    if($floor >3 || $floor<1){
		    throw new Exception('Invalid Input');
	    }

	    if($floor == 1){
		    Node::firstFloor();
	    }if($floor == 2){
		    Node::secondFloor();
	    }if($floor == 3){
		    Node::thirdFloor();
	    }
	    }catch(Exception $e){
		    echo "error";
	    }
    }
}

?>
