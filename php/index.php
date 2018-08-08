<?php
require_once('controller.php');
require_once('DB.php');


$db = new DB();
$controller = new Elevator();
$controller->setFloor(1);

?>
