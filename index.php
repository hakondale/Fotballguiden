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

<body>
    <br>
    <div class="bs-example">
        <table class="table table-hover table-bordered" align="center">
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
                
                <tr>
                    <td>1</td>
                    <td>Brann</td>
                    <td>100</td>
                    <td>+9000</td>
                    <td>9001</td>
                </tr>
                <tr>
                    
            </tbody>
        </table>
    </div>

    <?php

printLogOutToast();
printLogInToast();

?>
