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

    echo ' <div class="container">';
    $club = new Club();
    $club->constructWithClub_url($_GET['club']);
    echo '<div id="main" class="container" role="main">';
    echo '<div class="row" align="center">';
    $club->printHeaderLogo();

    echo '  <br> <br><div > <a class="btn btn-danger btn-lg btn-block" align="center" id="b1" class="scrollToBottom">  Faktaseksjon  </a> </div> <br>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-md-6">';
    $club->printMatches();
    echo '</div>';
    echo '<div class="col-md-6">';
    $club->printTwitterClub();
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-md-6">';
    $club->printTeamPicture();
    echo '</div>';
    echo '<div class="col-md-6">';
    $club->printTwitterHashtag();
    echo '</div>';
    echo '</div>';
    echo '</div>';
    $club->printAccordion();
    echo ' </div>';




printLogOutToast();
printLogInToast();
    ?>
    </div>
    </body>

<a href="http://jquery.com/"></a>
    <script src="jquery.js"></script>
    <script>
        
    $('#b1').click(function () {
     $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    return false;
    });
        
    </script>


<script type="text/javascript"> 
$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});
    
$("[data-toggle=popover]")
.popover({html:true})
</script>

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
                document.location = "/lag.php";
            }
        }
    </script>
    
    <script type="text/javascript"> 
    $('.nav a:contains("Lag")').parent().addClass('active');
    </script>