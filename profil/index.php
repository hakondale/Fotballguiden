<?php
include '../php/html/head.php';
include '../php/functions/dbfunctions.php';
include '../php/entities/User.php';
include '../php/functions/userfunctions.php';




if(!isLoggedIn()){
	//informere om at ikke logget inn
	//die();
}

echo $_SESSION['logged_in_user'];


echo '<br><br><h1>' . getLoggedInUser()->getName() . '</h1>';

?>
