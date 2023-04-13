    <!--Header section Begin-->
    <Div class="header">
        <div><img id="img_logo" src="images/paddle-white.png"></div>
        <!--div><img id="img_menu" src="images/hamburger.png"></div--->
        <div><img id="img_menu" src="images/hamburger.png"></div>
        <div class="header_text"><h1>Halifax Canoe and Kayak</h1></Div>
        <Nav class="menu_naV">
            <ul class="menu_list">
                <li ><a href="index.php" class="menu_item">Home</a></li>
                <li class="menu_item">Book a trip</li>
                <li class="menu_item">Admin login</li>
            </ul>
        </Nav>
    </Div>

    <DIV class="loginButton" >
                <a href="Logout.php"><button id="loginButton" disabled>Login</button></a>
    </DIV>

    <?php 

        if (basename($_SERVER['PHP_SELF']) != 'index.php') {

            echo '<script>document.getElementById("loginButton").disabled = false;</script>';
            echo '<script>document.getElementById("loginButton").innerHTML = "Logout";</script>';
        }
        else 
        {
            echo '<script>document.getElementById("loginButton").disabled = true;</script>';
        }
    ?>
    <!--Header section End-->