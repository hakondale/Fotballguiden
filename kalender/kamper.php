<?php
include "php/html/head.php";

echo "<br> <br> <br>";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fotball guiden test</title>
        <meta http-equiv="Content-Type" content="text/html/php; charset=UTF-8">
        <!-- Bootstrap CSS and bootstrap datepicker CSS used for styling the demo pages-->
        <link rel="stylesheet" href="/kalender/datepicker.css">
        <link rel="stylesheet" href="/kalender/bootstrap.css">
        <script>
         
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
 $('#example1').datepicker({
  format: 'yyyy-mm-dd'
});

$('#example1').on('change', function() {
   alert($('#example1').val());
});
            });
        </script>
    </head>
    <body>
        
        <div class="container">
            <div class="hero-unit">
                <input  type="text" placeholder="Velg dato"  id="example1">
            </div>
        </div>
        <!-- Load jQuery and bootstrap datepicker scripts -->
        <script src="/kalender/jquery-1.9.1.min.js"></script>
        <script src="/kalender/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
 $('#example1').datepicker({
  format: 'yyyy-mm-dd'
});

$('#example1').on('change', function() {
   alert($('#example1').val());
});
            });
           
        </script>
    </body>
</html>

