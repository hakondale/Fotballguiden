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
$tippeligaen = new League(1);
$tippeligaen->printLeagueTable();

printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

