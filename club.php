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
    $club->printLogo();

printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

