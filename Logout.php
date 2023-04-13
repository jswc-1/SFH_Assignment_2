<?php
session_start();
session_destroy();
?>

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>        
    
        <script>
            function confirmAction(msg) {
                window.location.href = "index.php";
            }
        </script>
    </head>
    


    <body>
        <?php include 'Header.php'; ?>

        <!--Main Content-->
        <div class="main_content">
            <Div class="Welcome"> Logout sucessful!</Div>
        </div>

        <hr>

        <div class="centerdiv">
            <input type='button' name='Release' onclick="confirmAction()" ; value='Back to Login Page'>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>