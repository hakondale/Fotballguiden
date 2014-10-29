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

    <div class="row">
     <div class="col-md-4"> </div>
        <div class="col-md-4" role="main">
            <div id="tabell">
                <a class="btn btn-primary btn-lg btn-block" align="center" style="width:50" href="/tabell.php">Tabell </a>
            </div> <br>

             <div id="kamper">
                <a class="btn btn-primary btn-lg btn-block" align="center" style="width:50" href="/kamper.php">Rundens Kamper </a>
            </div> <br>

             <div id="lag">
                <a class="btn btn-primary btn-lg btn-block" align="center" style="width:50" href="/lag.php">Lag </a>
            </div>
        </div>    
    </div>
<?php


printLogOutToast();
printLogInToast();
    ?>
</div>
</body>
