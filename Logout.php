<?php

//distory session
session_start();
session_destroy();
?>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>        
    </head>
    
    <body>
        <?php include 'header.php'; ?>

        <!--Main Content-->
        <div class="main_content">
            <Div class="Welcome"> Logout sucessful!</Div>
        </div>

        <hr>
       

        <?php include 'footer.php'; ?>
    </body>
</html>