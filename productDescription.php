<?php    
    session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShoeVilla | Women</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index_style.css" rel="stylesheet" type="text/css">
    <link href="css/women_catbox_style.css" rel="stylesheet" type="text/css">
    <link href="css/side_bar.css" rel="stylesheet" type="text/css">
    <link href="css/description_style.css" rel="stylesheet" type="text/css">
    <!--Website Tab Icon-->
    <link rel="shortcut icon" href="ShoeVillaBanner.ico">
</head>


<body>
    <header>
        <div class="wrapper">
            <div class="subheader">
                <p class="text" align="center">FREE INTERNATIONAL STANDARD SHIPPING ON ORDERS OF $200+</p>
            </div>
            <!--LOGO-->
            <div class="logo">
                <a href="index.php"><img src="ShoeVillaBanner.jpg"></a>
            </div>
            <!--Search Bar-->
            <!-- <div class="search">
                <form action="">
                    <input class="search-area" type="text" name="text" placeholder="Search">
                    <input class="search-btn" type="submit" name="submit" value="SEARCH">
                </form>
            </div> -->
            <!--User Menu-->
            <div class="user-menu">
                <li><a href="cart.php">Cart</a></li>
                <li><a href="index.php?logout='1'">Logout</a></li>
                
                <?php if (isset($_SESSION['username'])): ?>
                <p>&nbsp&nbsp<strong><?php echo $_SESSION['username']; ?></strong></p>
                <?php endif ?>
            </div>
            <!--Main Navigation-->
            <ul class="main-nav">
                <li><a href="index.php"> HOME                       </a></li>
                <li><a href="new_arrival.php"> NEW ARRIVAL          </a></li>
                <li><a href="men.php"> MEN                          </a></li>
                <li class="active"><a href="women.php"> WOMEN       </a></li>
                <li><a href="sales.php"> SALES                      </a></li>
            </ul>
            <!--Category Boxes-->
            <div class='productDetails' id='container'>
                <?php
                    // var_dump($_GET);
                    echo "
                    <div class='details' id='left'>
                    <h3> Details </h3>
                    <br>
                    <p>                        
                        Cuffed knit sock with Balenciaga logo<br>
                        Textured sole<br>
                        No Memory sole technology<br>
                        Shock absorber<br>
                        Very light shoe: 240g<br>
                        Embossed Balenciaga logo on the sole<br>
                        10 mm / 0,39 inches arch<br>
                        Made in Italy<br>
                        Wipe with a soft clean cloth<br>
                        Composition: <br>
                        80% Polyamide, 20% Elastan<br>
                    </p>
                </div>
                <div>
                <div class='productImage' id='center'>
                    <img src='images/Product/women/".$_GET['photo']."'>
                </div>
                <div class='descriptions' id='right'>
                    <h3>".$_GET['name']."</h3>
                    <P>".$_GET['introduction']."</P>
                    <br>
                    <br>
                    <h3>$".$_GET['price']."</h3>
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>
                    
                    <p>Color: Yellow</p>
                    <form action='cart.php' method='post'>
                    <p>Sizes:</p>
                    <div>
                        <ul class='sizeSelector'>
                        <li>
                            <input type='radio' id='36' value='36' name='size' checked/>
                            <label for='36'>36</label>
                        </li>
                        <li>
                            <input type='radio' id='37' value='37' name='size' />
                            <label for='37'>37</label>
                        </li>
                        <li>
                            <input type='radio' id='38' value='38' name='size'/>
                            <label for='38'>38</label>
                        </li>
                        <li>
                            <input type='radio' id='39' value='39' name='size' />
                            <label for='39'>39</label>
                        </li>
                        <li>
                            <input type='radio' id='40' value='40' name='size' />
                            <label for='40'>40</label>
                        </li>
                        <li>
                            <input type='radio' id='41' value='41' name='size' />
                            <label for='41'>41</label>
                        </li>
                    </ul>
                    </div>
                    
                    <br>
                    <div class='submitButton'>
                        <input type='button' class='submit' alt='submit' value='Add To Shopping Bag'>
                    </div>
                    </form>
                </div>
                </div>
                ";
                ?>
                
            </div>
        </div>

    <!--Footer Area-->
    <div class="footer">
        <div class="footer_sub_1">
            <p><a href=""> STORE LOCATOR </a></p><br><br>
            <p><a href=""> FINA A STORE </a></p><br>
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
            <p><a href=""> CIFTNOW </a></p>
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
    </header>
</body>
</html>