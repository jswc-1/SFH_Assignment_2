<?php
session_start();
$_SESSION["Title"] = $_POST["Title"];
$_SESSION["FName"] = $_POST["FName"];
$_SESSION["LName"] = $_POST["LName"];
$_SESSION["Role"] = $_POST["Role"];
?>
<?php include 'getSession.php'; ?>

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>        
    </head>
    
    <body>
        <?php include 'header.php'; ?>

        <!--Main Content-->
        <div class="main_content">
            <Div class="Welcome"> Hello <?= $Role?></Div>
        </div>

        <hr>
        <h2>Here are your options</h2>
        <?php
        switch ($Role) {
            case "Admin":
                //add a link to the new-account.php page
                echo '<a href="new-account.php">Create New Account</a>';
                echo '<br>';
                echo '<a href="lost-password.php">View All Accounts</a>';
                break;
            case "Manager":
                echo '<a href="manager.php"><button id="loginButton" disabled>Manager</button></a>';
                break;
            case "CEO":
                echo '<a href="ceo.php"><button id="loginButton" disabled>CEO</button></a>';
                break;
            default:
                echo '<a href="index.php"><button id="loginButton" disabled>Logout</button></a>';
        }
        ?>

        <?php include 'footer.php'; ?>
    </body>
</html>