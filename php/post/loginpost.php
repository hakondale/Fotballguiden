<?php
session_start();

error_reporting(-1);
ini_set('display_errors', 'On');

$email = $_POST['email'];
$password = $_POST['password'];

include '../functions/dbfunctions.php';
include '../functions/userfunctions.php';
include '../entities/User.php';



$user = new User();
$user->constructWithEmail($email);

if($user->isUserExcisting()){
	if($user->isCorrectPassword($password)){
		$user->login();
	}
	else{
		writeLoginMsg("Du har skrevet feil passord!");
	}
}
else{
	writeLoginMsg("Denne eposten eksisterer ikke"); 
}



header('Location: ' . $_SERVER['HTTP_REFERER']);

?>