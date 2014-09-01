 <?php 
  session_start(); 

 $testing = false;

if($testing){
  error_reporting(-1);
  ini_set('display_errors', 'On');
}

include $_SERVER['DOCUMENT_ROOT'] . "/beta/php/functions/dbfunctions.php";
include $_SERVER['DOCUMENT_ROOT'] . "/beta/php/functions/passwordfunctions.php";
include $_SERVER['DOCUMENT_ROOT'] . "/beta/php/entities/User.php";
include $_SERVER['DOCUMENT_ROOT'] . "/beta/php/functions/userfunctions.php";

 ?>

<!DOCTYPE html>
<html>
        <head>
                <title>Fotballguiden</title>
                	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        
                <meta name="viewport" content="width=device-width, initial-scale=1.0" content="text/html; charset=UTF-8">
                <link href = "/css/bootstrap.css" rel = "stylesheet">
        </head>
        <body>
        	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  				<div class="container">
      <a class="navbar-brand" href="http://beta.fotballguiden.nu">Fotballguiden</a>
      <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
      <span class = "icon-bar"></span>
      <span class = "icon-bar"></span>
      <span class = "icon-bar"></span>
    </button>
    <div class = "collapse navbar-collapse navHeaderCollapse">
      <ul class = "nav navbar-nav">
        <li><a href = "/profil"><span class="glyphicon glyphicon-home"></span> Profil</a></li>
        <li><a href = "/login"><span class="glyphicon glyphicon-home"></span> Logg inn</a></li>
        <li><a href = "/registrer"><span class="glyphicon glyphicon-home"></span> Registrer</a></li>
        <li><a href = "/php/post/logout.php"><span class="glyphicon glyphicon-home"></span> Logg ut</a></li>
        </ul>
      </li>
  				</div>
			</nav><br><br><br><br><br>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="/js/bootstrap.js"></script>

<?php

printLogOutToast();
printLogInToast();

?>