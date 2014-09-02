<?php
session_start();

$testing = false;

if($testing){
  error_reporting(-1);
  ini_set('display_errors', 'On');
}
$email = $_POST['email'];
$password = $_POST['password'];

include $_SERVER['DOCUMENT_ROOT'] . "/php/web/document_root.php";
include $DOCUMENT_ROOT . '/php/functions/dbfunctions.php';
include $DOCUMENT_ROOT . '/php/functions/userfunctions.php';
include $DOCUMENT_ROOT . '/php/entities/User.php';

$referer = "";

$user = new User();
$user->constructWithEmail($email);

if($user->isUserExcisting()){
	if($user->isCorrectPassword($password)){
		$user->login();
		$referer = "login";
	}
	else{
		writeLoginMsg("Du har skrevet feil passord!");
	}
}
else{
	writeLoginMsg("Denne eposten eksisterer ikke"); 
}


if(!$testing){
	header('Location: ' . $_SERVER['HTTP_REFERER'] . '?referer=' . $referer);
}
?>