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
            <Div class="Welcome">Lost Password</Div>
            <hr>
        </div>

        <div class="centerdiv">
            <label>Enter Email to recovery password</label> <input type="text" name="email address" id="email" placeholder="Email" required>
        <Div>
        <br>
        <div class="centerdiv">
            <input type='button' name='Release' onclick="confirmAction('Email Sent!')" value='Click to Recovery Password'>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>