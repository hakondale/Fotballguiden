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

function printTeamLogos(){
    
}
/*		
<img class="irc_mi" style="top-center: 100px;" src="http://fotballguiden.nu/media/pics/logos/' ' .png" width="80" height="80">

			

	</center>
</body>

</html>
<img src="http://fotballguiden.nu/media/pics/logos/molde.png"  width="200" height="85" alt="Computer Hope">
*/

//public function getClubPageLink(){
//        return '<a href="'. $this->getClubUrl().'"> '. $this->getName().'</a>';
//        }
    


$tippeligaen = new League(1);
$tippeligaen->printAllClubLogos();
//$tippeligaen->printLeagueTable();
 

printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

