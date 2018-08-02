<?php
class Node{

  public function firstFloor(){

	  echo "First Floor!";
  $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor= 1 WHERE nodeID=1";

        $result = mysqli_query($link, $sql);
	if(!$result){
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

        mysqli_close($link);


  }
  public function secondFloor(){

	  echo "Second Floor!";
  $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor=2 WHERE nodeID=1";
        mysqli_query($link, $sql);
        mysqli_close($link);


  }
  public function thirdFloor(){

	  echo "Third Floor!";
  $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor=3 WHERE nodeID=1";
        mysqli_query($link, $sql);
        mysqli_close($link);
  }
}
?>
