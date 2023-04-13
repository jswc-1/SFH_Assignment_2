<?php
session_start();
$Page = $_SERVER['HTTP_REFERER'];
?>
<?php include 'getSession.php'; ?>

<?php
    switch ($Role) {
        case "Admin":
            $pix = "images/admin.gif";
            break;
        case "Manager":
            $pix = "images/Manager.gif";
            break;
        case "CEO":
            $pix = "images/CEO.jpg";
            break;
        default:
            $pix = "images/admin.gif";
    }
?>

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
            <Div class="Welcome">So Your Computer isn't Working</Div>
        </div>

        <div class="Welcome">
            <img class="pix" src="<?=$pix?>" alt="Problem">
        </div>

        <div class="centerdiv">
            <input type='button' name='Release' onclick="confirmAction('Good')" value='Is it Fixed?'>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>