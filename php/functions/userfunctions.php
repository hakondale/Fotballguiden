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

function printLogOutToast(){
	if(isset($_GET['referer'])){
		if($_GET['referer'] == "logout"){
			echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Du er nå logget ut!</div>';
		}
	}
}

function printLogInToast(){
	if(isset($_GET['referer'])){
		if($_GET['referer'] == "login"){
			echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Du er nå logget inn!</div>';
		}
	}
}

function isEmailExisting($email){
	$numberEmailsQuery = mysql_query("SELECT * FROM users WHERE email = '$email'");
	$numberEmails = mysql_num_rows($numberEmailsQuery);
	if($numberEmails != 0){
		return TRUE;
	}
	else{
		return FALSE;
	}
}

?>