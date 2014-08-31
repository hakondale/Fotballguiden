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

function getLoggedInUser(){
	$user = new User();
	$user->constructWithUserId($_SESSION['logged_in_user']);
	return $user;
}

?>