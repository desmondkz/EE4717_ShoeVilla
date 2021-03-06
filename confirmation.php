<?php 
include 'mySQLConnect.php';
var_dump($_POST['firstname']);
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShoeVilla | Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index_style.css" rel="stylesheet" type="text/css">
    <!--Website Tab Icon-->
    <link rel="shortcut icon" href="ShoeVillaBanner.ico">
</head>


<body>
    <?php if (isset($_SESSION['success'])):   ?>
        <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?>
    <?php endif ?>

    <!--===Sub-header + Logo + Main Nav + Display Image + Category Boxes===-->
    <header>
        <div class="wrapper">
            <!--Sub-header-->
            <div class="subheader">
                <p class="text" align="center">FREE INTERNATIONAL STANDARD SHIPPING ON ORDERS OF $200+</p>
            </div>

            <!--Logo-->
            <div class="logo">
                <a href="index.php"><img src="ShoeVillaBanner.jpg"></a>
            </div>

            <!--User Menu-->
            <div class="user-menu">
                <li><a href="cart.php">Cart</a></li>
                <?php    
                    if (isset($_SESSION['username'])) {
                        // echo "&nbsp &nbsp";
                        echo '<li><a href="logout.php">Logout</a></li>';
                        // echo "<p>&nbsp;</p>";
                        echo "<li><strong>".$_SESSION['username']."</strong></li>";
                    }
                    else {
                        // echo "<p>&nbsp;</p>";
                        echo '<li><a href="login.php">Login</a></li>';
                        // echo "<p>&nbsp;</p>";
                        echo '<li><strong>Guest</strong></li>';                    
                    }
                ?>
            </div>

            <!--Main Navigation-->
            <div class='nav-div'>
            <ul class="main-nav">
                <li><a href="index.php"> HOME        </a></li>
                <li><a href="new_arrival.php"> NEW ARRIVAL          </a></li>
                <li><a href="men.php"> MEN                          </a></li>
                <li><a href="women.php"> WOMEN                      </a></li>
                <li><a href="sales.php"> SALES                      </a></li>
            </ul>
            </div>

            <div class="confirmation">
                <center>
                    <h2>Thanks for shopping! An order confirmation emails has send to your email address.</h2>
                </center>
            </div>

        </div>
    </header>

    <!--Footer Area-->
    <div class="footer">
        <div class="footer_sub_1">
            <p><a href=""> STORE LOCATOR </a></p><br><br>
            <p><a href=""> FIND A STORE </a></p><br>
            <p><a href=""> RETURN LOCATIONS </a></p>
        </div>
        <div class="footer_sub_2">
            <p><a href=""> CLIENT SERVICES</a></p><br><br>
            <p><a href=""> HELP & FAQ </a></p><br>
            <p><a href=""> SIZE CHART </a></p><br>
            <p><a href=""> CONTACT US </a></p><br>
            <p><a href=""> SITE MAP </a></p>
        </div>
        <div class="footer_sub_3">
            <p><a href=""> GIVE A GIFT </a></p><br><br>
            <p><a href=""> CHECK BALANCE </a></p><br>
            <p><a href=""> GIFT CARD </a></p><br>
            <p><a href=""> GIFTNOW </a></p>
        </div>
        <div class="footer_sub_4">
            <p><a href=""> QUICK LINK </a></p><br><br>
            <p><a href=""> OUR APP </a></p><br>
            <p><a href=""> LAUNCH RESERVATION </a></p><br>
            <p><a href=""> AFFILIATES </a></p><br>
            <p><a href=""> FIT GUARANTEE </a></p>
        </div>
        <div class="footer_social">
            <a href=""><img src="images/social.PNG" style="width:200px;height:40px;"></a>
        </div>
        <div class="footer_copyright">
            <p>© 2018 ShoeVilla.com, Inc. All Rights Reserved</p>
        </div>
    </div>
</body>
</html>