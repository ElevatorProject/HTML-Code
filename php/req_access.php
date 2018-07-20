<?php
$link = mysqli_connect("localhost", "ese", "ese");
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$type = $_POST['student/faculty'];
$password = $_POST['password'];
$notes = $_POST['text'];
echo "hello $firstname";
$sql = "INSERT INTO elevator.users (firstname, lastname, email, type, password, notes) VALUES 
    ('$firstname', '$lastname', '$email', '$type', '$password', '$notes')";
mysqli_query($link, $sql);
mysqli_close($link);
header("Location: ../login.html");
?>
