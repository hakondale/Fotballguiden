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
        <!--
        if (screen.width <= 699) {
            document.location = "/mobil-index.php";
        }else{ 
            document.location = "/desktop-index.php";
        }
        //-->
        
        
    </script>

<?php
    
    
    //$tippeligaen = new League(1);
    //$tippeligaen->printNews();

    printLogOutToast();
    printLogInToast();
?>
</div>
</body>
