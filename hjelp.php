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
            <div class="col-md-2"> </div>
            <div class="col-md-8" role="main">
    
                <div class="jumbotron" >
                    <h2>Nyheter</h2>
                    <pp>Her vises nyheter fra tippeligaen. </pp>
                    
                    <h2>Tabell</h2>
                    <pp>Dette er en oversikt over plasseringene til lagene i tippeligaen sortert etter plassering.</pp>
                    <pp>Plass #1 markert i grønnt er den som leder ligaen. Plass #14 i gult må vinne kvalifiseringskamp med 1. divisjon for bli med videre i tippeligaen neste sesong. Plass #15 og #16 i rødt rykker ned når sesongen er ferdig.</pp>
                    <pp>Denne listen kan du finne ved å trykke på "Tabell"-knappen på toppen av siden, eller på hjem-siden.</pp>
                    
                    <h2>Rundens Kamper</h2>
                    <pp> Dette er en oversikt over hvilke kamper som skal som skal spilles i tippeligaen. Listen er sortert etter tid. Senere skal det være mulig å sortere etter en spesifik dato, eller hoppe frem eller tilbake i tid.</pp>
                    <pp>Denne listen kan du finne ved å trykke på "Rundens Kamper"-knappen på toppen av siden, eller på hjem-siden.</pp>
                    
                    <h2>Lag</h2>
                    <pp>Her kan man trykke på logoen til laget du ønsker informasjon om for å gå inn på lagsiden deres. På lagsiden kan man se "tweets" for det respektive laget sin hashtag eller fra lagets ofisielle twitter-konto. Man kan også se diverse fakta om klubben, og deres 5 neste kamper de skal spille.</pp>
                    <pp>Denne listen kan du finne ved å trykke på "lag"-knappen på toppen av siden, eller på hjem-siden.</pp>
                    
                    <h2>Kontakt oss!</h2>
                    <pp> Denne siden er utviklet av Erik  Oskar Zetterquist, Stig Harald Svendsvoll, Håkon H. Dale, Lars Ole B. Vatne, og Magnus Engestøl. </pp>
                    <pp> Har du spørsmål eller andre hendvendelser kan du sende mail til <a href= "http://www.gmail.com" >fotballguiden@gmail.com</a> </pp>
                    
                </div>
            </div>
        </div>
    
<script type="text/javascript"> 
    $('.nav a:contains("Hjelp")').parent().addClass('active');
    </script>
    
<?php


printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

