<?php

  session_start(); 

 $testing = false;

if($testing){
  error_reporting(-1);
  ini_set('display_errors', 'On');
}

include $DOCUMENT_ROOT . "/php/functions/dbfunctions.php";
include $DOCUMENT_ROOT . "/php/functions/passwordfunctions.php";
include $DOCUMENT_ROOT . "/php/entities/User.php";
include $DOCUMENT_ROOT . "/php/functions/userfunctions.php";
include "beta/php/html/head.php";

echo "<br> <br> <br> jklfsd";

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
</style>   
</head>
<body>
    <br>
  
        <table class="test" align="center" style="width:80%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Lag</th>
                    <th>Kamper</th>
                    <th>Målforskjell</th>
                    <th>Poeng</th>
                </tr>
            </thead>
            <tbody>
                
                <tr id="rad1">
                    <td>1</td>
                    <td>Brann</td>
                    <td>100</td>
                    <td>+9000</td>
                    <td>9001</td>
                </tr>
                    <tr>
                        <td>2</td>
                          <td>RBK</td>
                          <td>100</td>
                          <td>+000</td>
                        <td>9001</td>
                    </tr>
                <tr>
                    
            </tbody>
        </table>

    <?php

printLogOutToast();
printLogInToast();

?>
