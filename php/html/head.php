 <?php 
  session_start(); 

 $testing = true;

if($testing){
  error_reporting(-1);
  ini_set('display_errors', 'On');
}

include "php/functions/dbfunctions.php";
include "php/functions/passwordfunctions.php";
include "php/entities/User.php";
include "php/entities/League.php";
include "php/entities/Club.php";
include "php/functions/userfunctions.php";
include "php/entities/Match.php";
include "php/entities/News.php";

 ?>

<!DOCTYPE html>
<html>
        <head>
                <title>Fotballguiden</title>
                	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        
                <meta name="viewport" content="width=device-width, initial-scale=1.0" content="text/html; charset=UTF-8">
                <link href = "/css/bootstrap.css" rel = "stylesheet">
                <link rel="stylesheet" type="text/css" href="css/mobilcss.css">
                <link rel="stylesheet" type="text/css" href="/css/background.css">
                <link rel="shortcut icon" href="/media/pics/logos/fglogo.png">
        </head>
        <body>
            
             
            
        	<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
                <div class="container">
                
                    <link rel="stylesheet" type="text/css" href="mobilcss.css">
                    <div class=".navbar-header" >
           
                    
                        <script type="text/javascript"> 
                            if(screen.width <= 699){
                         document.write('<a class="navbar-brand" href=".."> ' );
                            }else{document.write('<a class="navbar-brand"> ');}
                        </script>

                        <img alt="Brand" src= "/media/pics/logos/fglogo.png"> Fotballguiden </a>
                        <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                          <span class = "icon-bar"></span>
                          <span class = "icon-bar"></span>
                          <span class = "icon-bar"></span>
                        </button>
                    
                <script type="text/javascript"> 
                            if(screen.width <= 699){
                         document.write('</div>' );
                            }
                </script>
                  </div>
                <div class = "collapse navbar-collapse navHeaderCollapse">
                    <ul class = "nav navbar-nav navbar-left">
                        <?php echo '<li><a href = "desktop-index.php" ><span class="glyphicon glyphicon-globe"></span> Nyheter</a></li>'; ?>
                        <?php echo '<li><a href = "tabell.php"><span class="glyphicon glyphicon-list-alt"></span> Tabell</a></li>'; ?>
                        <?php echo '<li><a href = "kamper.php"><span class="glyphicon glyphicon-calendar"></span> Rundens Kamper </a></li>'; ?> 
                        <?php echo '<li><a href = "lag.php"><span class="glyphicon glyphicon-th-large"></span> Lag</a></li>'; ?>
                        </ul>
                        <?php echo ' 
                        <ul class="nav navbar-nav navbar-right " >
                        
                        <li> <div id="share-buttons">  <a href="http://www.facebook.com/sharer.php?u=http://www.fotballguiden.nu" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />  </a>
  </div> </li>
  <li> <div id="share-buttons"> <a href="http://twitter.com/share?url=fotballguiden.nu&text=FOTBALLGUIDEN.nu YO &hashtags=fotballguiden" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a> </li>
                        <li><a href = "hjelp.php"><span class="glyphicon glyphicon-info-sign"></span> Hjelp</a> </div> </li>
                        '; ?>


                    </ul>
               <script type="text/javascript"> 
                            if(screen.width >= 699){
                         document.write('</div>' );
                            }
                </script> 
            </div></div>
    
    
    <div class = "navpic">
        <div class = "klasse" max-width="100%"> 
   <script type="text/javascript">
        <!--
        if (screen.width <= 699) {
            document.write('<img id="bilde" src="http://i.imgur.com/tJhcGUG.jpg">');
        }else{ 
            document.write('<img id="bilde" src="http://i.imgur.com/1z19EVu.jpg">');   
        }
        //-->      
    </script>
    
        </div>
    </div>
    
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="/js/bootstrap.js"></script>
    
    
    

    
    
<?php

printLogOutToast();
printLogInToast();

?>
    
    
    
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ad071071-e2d6-431a-8475-4435b17e4bf0", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>

    <script type="text/javascript">
        <!--
        if (screen.width >= 699) {
            isMobile = true;
        }else{ 
            esMobile = false;
        }
        //-->
        
        $(window).resize(function () { 
    $('body').css('padding-top', parseInt($('#main-navbar').css("height"))+10);
});

$(window).load(function () { 
    $('body').css('padding-top', parseInt($('#main-navbar').css("height"))+10);        
});
    </script>
    </body>
</html>