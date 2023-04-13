<?php session_start(); ?>
<?php include 'getSession.php'; ?>

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>        
    </head>
    
    <body>
        <?php include 'Header.php'; ?>

        <!--Main Content-->
        <div class="main_content">
            <Div class="Welcome"> Hello <?= $Role?></Div>
            <hr class="line"/>  
        
            <h2>Here are your options</h2>
            <?php
            switch ($Role) {
                case "Admin":
                    echo '<a href="new-account.php">Create New Account</a>';
                    break;
                case "Manager":
                    echo '<a href="lost-password.php">Lost Password</a>';
                    break;
                case "CEO":
                    echo '<a href="need-help.php">Need Help</a>';
                    break;
                default:
                    break;
            }   
            echo '<br>';
            echo '<a href="isnt-working.php">My computer isn\'t working</a>';
            ?>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>