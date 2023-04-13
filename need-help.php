<?php
session_start();
$Page = $_SERVER['HTTP_REFERER'];
?>
<?php include 'getSession.php'; ?>

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> 
        
        <script>
            function confirmAction(msg) {
                alert(msg);
                window.location.href = "<?= $Page ?>";
            }
        </script>
    </head>
    
    <body>
        <?php include 'Header.php'; ?>

        <!--Main Content-->
        <div class="main_content">
            <Div class="Welcome"> Need Help? <br> Please call: 902-123-4567</Div>
        </div>

        <div class="centerdiv">
            <input type='button' name='Release' onclick="confirmAction('Help is on the way!')" value='Send me someone'>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>