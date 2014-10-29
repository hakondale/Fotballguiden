 <?php 
  session_start(); 

 $testing = true;

if($testing){
  error_reporting(-1);
  ini_set('display_errors', 'On');
}

include "php/functions/dbfunctions.php";
include "php/functions/passwordfunctions.php";
include "php/entities/User.php";
include "php/entities/League.php";
include "php/entities/Club.php";
include "php/functions/userfunctions.php";
include "php/entities/Match.php";

 ?>

<!DOCTYPE html>
<html>
        <head>
                <title>Fotballguiden</title>
                	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        
                <meta name="viewport" content="width=device-width, initial-scale=1.0" content="text/html; charset=UTF-8">
                <link href = "/css/bootstrap.css" rel = "stylesheet">
                <link rel = "stylesheet" type = "text/css" href = "/css/background.css">  
        </head>
        <body>
        	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  				<div class="container">
    <?php echo '<a class="navbar-brand" href="..">Fotballguiden</a>'; ?>
      <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
      <span class = "icon-bar"></span>
      <span class = "icon-bar"></span>
      <span class = "icon-bar"></span>
    </button>
    <div class = "collapse navbar-collapse navHeaderCollapse">
      <ul class = "nav navbar-nav">
        <?php echo '<li><a href = "tabell.php"><span class="glyphicon glyphicon-home"></span> Tabell</a></li>'; ?>
        <?php echo '<li><a href = "kamper.php"><span class="glyphicon glyphicon-home"></span> Rundens Kamper </a></li>'; ?> 
        <?php echo '<li><a href = "lag.php"><span class="glyphicon glyphicon-home"></span> Lag</a></li>'; ?>
        </ul>
      </li>
  				</div>
			</nav>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="/js/bootstrap.js"></script>

<?php

printLogOutToast();
printLogInToast();

?>