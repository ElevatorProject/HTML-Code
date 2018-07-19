<?php
session_start(); 
if (isset($_SESSION['login'])) {

}else{
	header("Location: /HTML-Code/login.html");
	exit();
}

