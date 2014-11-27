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
echo ' <div class="container">';
$tippeligaen = new League(1);
$tippeligaen->printAllClubLogos();
echo ' </div>';
 

printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

