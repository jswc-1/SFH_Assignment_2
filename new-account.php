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
            <Div class="Welcome"> Create New Account</Div>
            <hr>
        </div>

        <br>
        <div class="centerdiv">
            <form action="send-email.php" method="post">
                <input type="hidden" name="emailType" value="newAccount">
                <input type='submit' value='Click to Create New Account'>
            </form>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>