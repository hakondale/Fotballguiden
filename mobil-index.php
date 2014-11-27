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
body {
background-image: url(/media/pics/logos/splash.jpg);
max-height:70%;
}
.navbar-default .navbar-brand {
    color: #cf5fe3;
}
    
</style>   
</head>
<body>

    <div class="container">
            <br><br>
            <div class="row">
             <div class="col-md-4"> </div>
                <div class="col-md-4" role="main">
                    
                    <div id="nyheter">
                        <a class="btn btn-primary btn-lg btn-block" align="center" href="/desktop-index.php">Nyheter </a>
                    </div> <br>
                    
                    <div id="tabell">
                        <a class="btn btn-primary btn-lg btn-block" align="center" href="/tabell.php">Tabell </a>
                    </div> <br>

                     <div id="kamper">
                        <a class="btn btn-primary btn-lg btn-block" align="center" href="/kamper.php">Rundens Kamper </a>
                    </div> <br>

                     <div id="lag">
                        <a class="btn btn-primary btn-lg btn-block" align="center" href="/lag.php">Lag </a>
                    </div> <br>

                    <div id="hjelp">
                        <a class="btn btn-primary btn-lg btn-block" align="center" href="/hjelp.php">Hjelp </a>
                    </div>
                </div>    
            </div>
        </div>
<?php




printLogOutToast();
printLogInToast();
    ?>
</div>
</body>
