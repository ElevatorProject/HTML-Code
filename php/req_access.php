<?php
$link = mysqli_connect("localhost", "ese", "ese");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$type = $_POST['student/faculty'];
$password = $_POST['password'];
$notes = $_POST['text'];
echo "hello $firstname";
$sql = "INSERT INTO elevator.users (firstname, lastname, email, type, password, notes) VALUES 
    ('$firstname', '$lastname', '$email', '$type', '$password', '$notes')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
