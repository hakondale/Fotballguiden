<?php

function isLoggedIn(){
	if($_SESSION['logged_in_user']){
		return TRUE;
	}
	else{
		return FALSE;
	}
}

function printLoginMsg(){
	if($_SESSION['loginMsg']){
		echo '<font color="red">' . $_SESSION['loginMsg'] . '</font>';
	}
}

function writeLoginMsg($loginMsg){
	$_SESSION['loginMsg'] = $loginMsg;
}

function printRegisterMsg(){
	if($_SESSION['registerMsg']){
		echo '<font color="red">' . $_SESSION['registerMsg'] . '</font>';
	}
}

function writeRegisterMsg($registerMsg){
	$_SESSION['registerMsg'] = $registerMsg;
}

function getLoggedInUser(){
	$user = new User();
	$user->constructWithUserId($_SESSION['logged_in_user']);
	return $user;
}

function isEmailExisting($email){
	$emailExistingQuery = mysql_query("SELECT * FROM users WHERE email = '$email'");
	$numberEmails = mysql_num_rows($emailExistingQuery);
	if($numberEmails != 0){
		return TRUE;
	}
	else{
		return FALSE;
	}
}

?>