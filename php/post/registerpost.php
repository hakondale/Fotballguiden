<?php
session_start();

error_reporting(-1);
  ini_set('display_errors', 'On');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];

include '../functions/dbfunctions.php';
include '../functions/userfunctions.php';
include '../functions/passwordfunctions.php';
include '../entities/User.php';

if($name && $email && $password && $repeatPassword){

if(!isEmailExisting($email)){
	if(isPasswordGood($password)){
		if(isRepeatPasswordTheSameAsPassword($password, $repeatPassword)){
			$user = new User();
			$user->setName($name);
			$user->setEmail($email);
			$user->setPassword($password);
			$user->saveInDB();
			$user->constructWithEmail($email);
			$user->login();

			header('Location: /profil/');
			die();
		}
		else{
			writeRegisterMsg("Passord samsvarer ikke");
		}
	}
	else{
		writeRegisterMsg("Passord er dårlig");
	}
}
else{
	writeRegisterMsg("Epost existerer fra før");
}

}
else{
	writeRegisterMsg("Du må fylle ut alle felt!");
}


header('Location: ' . $_SERVER['HTTP_REFERER']);

?>