<?php
session_start();
$errorMsg = "";
$validUser = True;

if(isset($_POST["sub"])) {

$email = $_POST['email'];
$password = $_POST['password'];

$link = mysqli_connect("localhost", "ese","ese");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "select * from elevator.users where
    email = '$email' and password='$password'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
if($result->num_rows==0){
	$validUser = False;
}else{
	$validUser = True;
}
mysqli_close($link);
}

if(!$validUser){ $errorMsg = "Invalid username or password.";}
else {
	$_SESSION["login"] = true; 
	header('Location: ../index.php');
}

echo $errorMsg;
?>
