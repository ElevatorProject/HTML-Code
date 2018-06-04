<?php
$link = mysqli_connect("localhost", "root", "", "demo");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email= $_POST["email"];
$sql = "INSERT INTO info (first_name, last_name, email) VALUES ('$firstname', '$lastname', '$email')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
    mysqli_close($link);
?>
