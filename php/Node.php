<?php
class Node{

  public function firstFloor(){

  $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor=$floor WHERE nodeID=1";
        mysqli_query($link, $sql);
        mysqli_close($link);


  }
  public function secondFloor(){
  $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor=$floor WHERE nodeID=1";
        mysqli_query($link, $sql);
        mysqli_close($link);


  }
  public function thirdFloor(){
  $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor=$floor WHERE nodeID=1";
        mysqli_query($link, $sql);
        mysqli_close($link);
  }
}
?>
