 <?php 
  session_start(); 

 $testing = true;

if($testing){
  error_reporting(-1);
  ini_set('display_errors', 'On');
}

include $_SERVER['DOCUMENT_ROOT'] . "/php/web/document_root.php";
include $DOCUMENT_ROOT . "/php/functions/dbfunctions.php";
include $DOCUMENT_ROOT . "/php/functions/passwordfunctions.php";
include $DOCUMENT_ROOT . "/php/entities/User.php";
include $DOCUMENT_ROOT . "/php/functions/userfunctions.php";

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
    <?php echo '<a class="navbar-brand" href="'. $URL_ROOT .'">Fotballguiden</a>'; ?>
      <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
      <span class = "icon-bar"></span>
      <span class = "icon-bar"></span>
      <span class = "icon-bar"></span>
    </button>
    <div class = "collapse navbar-collapse navHeaderCollapse">
      <ul class = "nav navbar-nav">
        <?php echo '<li><a href = "'. $URL_ROOT .'profil"><span class="glyphicon glyphicon-home"></span> Profil</a></li>'; ?>
        <?php echo '<li><a href = "'. $URL_ROOT .'login"><span class="glyphicon glyphicon-home"></span> Logg inn</a></li>'; ?>
        <?php echo '<li><a href = "'. $URL_ROOT .'registrer"><span class="glyphicon glyphicon-home"></span> Registrer</a></li>'; ?>
        <?php echo '<li><a href = "'. $URL_ROOT .'php/post/logout.php"><span class="glyphicon glyphicon-home"></span> Logg ut</a></li>'; ?>
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