<?php
session_start();
$errorMsg = "";
$validUser = $_SESSION["login"] === true;
if(isset($_POST["sub"])) {
$validUser = $_POST["username"] == "admin" && $_POST["password"] == "password";
echo $_POST['username'];
if(!$validUser) $errorMsg = "Invalid username or password.";
else {
	$_SESSION["login"] = true; 
	header('Location: ../index.php');
}
}
echo $errorMsg;
?>
