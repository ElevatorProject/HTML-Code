<?php
class InvalidInputException extends Exception{
        public function errorMessage(){

           $errorMessage = "Invalid Input";
           return $errorMessage;
        }
}
class Elevator extends node{

    private $idNumber;
    private $floor = $_POST["FloorNumber"];

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

        try{
        if($floor < 1 || $floor > 3){
            throw new InvalidInputException($email);
        }

        $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor=$floor WHERE nodeID=1";
        mysqli_query($link, $sql);
        mysqli_close($link);

        }
        catch (customException $e){
            echo $e->errorMessage();
        }
    }
}
?>
