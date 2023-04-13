<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>        
    </head>
    
    <body>
        <?php include 'header.php'; ?>

        <!--Main Content-->
        <div class="main_content">
            <div class="main_text">
                <Div class="Welcome"><h1>Welcome to Your IT Support System</h1></Div>
            </div>
        
            <form action="problem.php" method="post">
                <!-- add a drop down menu for the problem type -->
                <select name="Title" id="Title">
                    <option value="Mr">Mr</option>
                    <option value="Miss">Miss</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Dr">Dr</option>
                <input type="text" name="FName" id="FName" placeholder="First Name">

                <input type="text" name="LName" id="FName" placeholder="Last Name">
                <select name="Role" id="Role">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>
                <input class="submit" type="submit">
            </form>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>