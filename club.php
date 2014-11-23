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

    echo ' <div class="container">';
    $club = new Club();
    $club->constructWithClub_url($_GET['club']);
    echo '<div id="main" class="container" role="main">';
    echo '<div class="row" align="center">';
    $club->printHeaderLogo();

    echo '  <br> <br><div > <a class="btn btn-primary btn-lg btn-block" align="center" id="b1" class="scrollToBottom">  Faktaseksjon  </a> </div> <br>';
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
    echo ' </div>';




printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

<a href="http://jquery.com/"></a>
    <script src="jquery.js"></script>
    <script>
        
    $('#b1').click(function () {
     $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    return false;
    });
        
    </script>