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


    private function query_sql($conn, $msg) {
        $result = mysqli_query($conn, $msg);
	    if(!$result){
	        throw new nodeException ();
		}
    }

    public function firstFloor(){
	    echo "First Floor!";
        $link = mysqli_connect("localhost", "ese","ese");
        $sql = "UPDATE elevator.elevatorNetwork SET 
                requestedFloor= 1 WHERE nodeID=1";

      //  $result = mysqli_query($link, $sql);
	    //if(!$result){
	    //    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        //}
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
