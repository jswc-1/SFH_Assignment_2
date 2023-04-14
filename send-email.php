<?php
session_start();
$Page = "Logout.php";
$emailType = $_POST["emailType"];
$mailMsg = "";
$mailButtonText = "";
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
            <Div class="Welcome"><label id="mailTitle"></label></Div>
        </div>

        <div class="centerdiv">
            <label id="TypeLable">Enter Email to recovery password</label> <input type="text" name="email address" id="email" placeholder="Email" required>
            <br>
        <Div>
        <br>
        <?php   
            if ($emailType=="lostPassword") {
                echo "<script>document.getElementById('mailTitle').innerHTML = 'Recovery Password';</script>";
                echo "<script>document.getElementById('TypeLable').innerHTML = 'Enter Email to recovery password';</script>";
                $mailMsg = "Password Recovery mail Sent";
                $mailButtonText = "Recovery Password";
            } else if ($emailType=="newAccount") {
                echo "<script>document.getElementById('mailTitle').innerHTML = 'Create New Account';</script>";
                echo "<script>document.getElementById('TypeLable').innerHTML = 'Enter Email to create new account';</script>";
                $mailMsg = "New Account mail Sent";
                $mailButtonText = "Create Account";
            }
        ?>

        <div class="centerdiv">
            <input type='button' name='Release' onclick="confirmAction('<?=$mailMsg?>')" value='<?=$mailButtonText?>'>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>