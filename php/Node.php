<?php
class nodeException extends Exception {
	public function errorMessage() {
		//error message
		$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
			."ERROR: Could not able to execute $sql. " . mysqli_error($link);
		return $errorMsg;
	}
}
class Node{

    public function firstFloor(){
	   
        $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor= 1 WHERE nodeID=1";

        try {
		Node::query_sql($link, $sql);
        }
        catch (customException $e) {
            //display custom message
            echo $e->errorMessage();
        }
        mysqli_close($link);
  }

  public function secondFloor(){
	  echo "Second Floor!";
      $link = mysqli_connect("localhost", "ese","ese");
      $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor=2 WHERE nodeID=1";
     // mysqli_query($link, $sql);
	 try {
		Node::query_sql($link, $sql);
        }
        catch (customException $e) {
            //display custom message
            echo $e->errorMessage();
        }

	mysqli_close($link);
  }

  public function thirdFloor(){
        echo "Third Floor!";
        $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor=3 WHERE nodeID=1";
       // mysqli_query($link, $sql);
	 try {
		Node::query_sql($link, $sql);
        }
        catch (customException $e) {
            //display custom message
            echo $e->errorMessage();
        }

	mysqli_close($link);
  }

}
?>
