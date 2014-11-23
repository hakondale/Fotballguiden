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
    
    <script type="text/javascript">
        
        document.onkeydown = checkKey;

        function checkKey(e) {

            e = e || window.event;

            if (e.keyCode == '39') {
                // right arrow
                document.location = "/lag.php";
            }
            else if (e.keyCode == '37') {
                // left arrow
                document.location = "/tabell.php";
            }
        }
    </script>
    
    <script type="text/javascript"> 
    $('.nav a:contains("Rundens Kamper")').parent().addClass('active');
    </script>

<?php


$tippeligaen = new League(1);
//$tippeligaen->printCalendar();
$tippeligaen->printMatchesTable();


printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

