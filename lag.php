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
.label {
    padding: 1px 3px 2px;
    font-size: 9.75px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    white-space: nowrap;
    background-color: rgba(26, 26, 26, 0.72);
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
</style>   
</head>
<body>
    <br>
    
    <script type="text/javascript">
        
        document.onkeydown = checkKey;

        function checkKey(e) {

            e = e || window.event;

            if (e.keyCode == '19') {
                // right arrow
                document.location = "http://kidculture.files.wordpress.com/2011/04/easter-egg.jpg";
            }
            else if (e.keyCode == '37') {
                // left arrow
                document.location = "/kamper.php";
            }
            else if (e.keyCode == '39') {
                // left arrow
                document.location = "/desktop-index.php";
            }
        }
    </script>
    
    <script type="text/javascript"> 
    $('.nav a:contains("Lag")').parent().addClass('active');
    </script>
    
<?php

$tippeligaen = new League(1);
$tippeligaen->printAllClubLogos();
 

printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

