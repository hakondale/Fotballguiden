<?php
$phpmyadminhost = "fotballguiden.nu.mysql"; 		
$phpmyadminusername = "fotballguiden_n"; 			
$phpmyadminpassword = "9c8HXNGh"; 				
$phpmyadmindb_name = "fotballguiden_n"; 		


// Connecting db
mysql_connect("$phpmyadminhost","$phpmyadminusername","$phpmyadminpassword")or die("Couldn't connect mysql."); 
mysql_select_db("$phpmyadmindb_name")or die("Couldn't connect db.");
mysql_query("SET NAMES utf8");
?>