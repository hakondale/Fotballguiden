<?php
include "php/html/head.php";

echo "<br> <br> <br>";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
 
<style>
    
.test{
    border: 1px solid black;
    
}
#rad1 {
    background-color: grey;
}
</style>   
</head>
<body>
    <br>
    

<?php

    $club = new Club();
    $club->constructWithClub_url($_GET['club']);
    echo '<div id="main" class="container" role="main">';
    echo '<div class="row" align="center">';
    $club->printHeaderLogo();
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-md-5">';
    $club->printMatches();
    echo '</div>';
    echo '<div class="col-md-5">';
    $club->printTwitterClub();
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-md-5">';
    $club->printTeamPicture();
    echo '</div>';
    echo '<div class="col-md-5">';
    $club->printTwitterHashtag();
    echo '</div>';
    echo '</div>';
    echo '</div>';
    $club->printAccordion();




printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

