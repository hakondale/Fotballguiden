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

    <script type="text/javascript">
        
        document.onkeydown = checkKey;

        function checkKey(e) {

            e = e || window.event;

            if (e.keyCode == '39') {
                // right arrow
                document.location = "/kamper.php";
            }
            else if (e.keyCode == '37') {
                // left arrow
                document.location = "/desktop-index.php";
            }
        }
    </script> 
    
    <script type="text/javascript"> 
    $('.nav a:contains("Tabell")').parent().addClass('active');
    </script>
    
<?php


//public function getClubPageLink(){
//        return '<a href="'. $this->getClubUrl().'"> '. $this->getName().'</a>';
//        }


$tippeligaen = new League(1);
$tippeligaen->printLeagueTable();


printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

