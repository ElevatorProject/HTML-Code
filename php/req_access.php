<?php
$link = mysqli_connect("localhost", "root", "", "userinfo");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO userinfo (firstname, lastname, email) VALUES 
    ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
