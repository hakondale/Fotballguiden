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
    $('.nav a:contains("Nyheter")').parent().addClass('active');
    </script>

    <script type="text/javascript">
        
        document.onkeydown = checkKey;

        function checkKey(e) {

            e = e || window.event;

            if (e.keyCode == '39') {
                // right arrow
                document.location = "/tabell.php";
            }
            else if (e.keyCode == '37') {
                // left arrow
                document.location ="/lag.php";
            }
            else if (e.keyCode == '77'){
                // m
                document.location = "/mobil-index.php";
            }
        }
    </script>
    
<?php
    
    
    $tippeligaen = new League(1);
    $tippeligaen->printNews();

    printLogOutToast();
    printLogInToast();
?>
</div>
</body>
