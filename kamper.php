<?php
include "php/html/head.php";

echo "<br> <br> <br>";

?>

<!DOCTYPE html>
<html>
<head>
    <title>bootstrap datepicker examples</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Bootstrap CSS and bootstrap datepicker CSS used for styling the demo pages-->
    <link rel="stylesheet" href="datepicker.css">
    <link rel="stylesheet" href="bootstrap.css">
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
//$tippeligaen->printCalendar();
$tippeligaen->printMatchesTable();




printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

