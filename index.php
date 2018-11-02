<?php include('mySQLConnect.php'); 

    // if user is not logged in, user cannot access this page
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShoeVilla | ShoeVilla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index_style.css" rel="stylesheet" type="text/css">
    <link href="css/index_catbox_style.css" rel="stylesheet" type="text/css">
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

    <?php if (isset($_SESSION['userName'])): ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
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
                <a href="index.html"><img src="ShoeVillaBanner.jpg"></a>
            </div>

            <!--User Menu-->
            <div class="user-menu">
                <li><a href="cart.html">Cart</a></li>
                <li><a href="index.php?logout='1'">Logout</a></li>
            </div>

            <!--Main Navigation-->
            <ul class="main-nav">
                <li class="active"><a href="index.php"> HOME        </a></li>
                <li><a href="new_arrival.php"> NEW ARRIVAL          </a></li>
                <li><a href="men.php"> MEN                          </a></li>
                <li><a href="women.php"> WOMEN                      </a></li>
                <li><a href="sales.php"> SALES                      </a></li>
            </ul>

            <!--Image Display-->
            <div class="image-display">
                <img src="images/1.png">              
            </div>

            <!--Maddox Category Box-->
            <div class="maddox-catbox">
                <a href="maddox.html">
                        <img src="images/Product/F0.1.JPG">
                        <img src="images/Product/F0.0.JPG">
                        <img src="images/Product/F0.2.JPG">
                </a>
                <p class="maddox-header">INTRODUCING MADDOX</p>
                <p class="maddox-tagline">Chunky with some serious style.</p>
                <ul class="maddox-btn">
                    <li><a href="maddox.html"> SHOP THE NEW MADDOX </a></li>
                </ul>
            </div>

            <!--Hensley Hightop Category Box
            <div class="hensley-catbox">
                <a href="hensley.html">
                    <img src="images/Product/M5.png">
                </a>
                <p class="hensley-header">HENSLEY HIGHTOP</p>
                <p class="hensley-tagline">Trend with the originals.</p>
                <ul class="hensley-btn">
                    <li><a href="hensley.html"> SHOP HENSLEY HIGHTOP </a></li>
                </ul>
            </div>-->

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