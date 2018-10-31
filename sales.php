<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShoeVilla | Sales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index_style.css" rel="stylesheet" type="text/css">
    <link href="css/new_arrival_catbox_style.css" rel="stylesheet" type="text/css">
    <link href="css/sales_style.css" rel="stylesheet" type="text/css">
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
                <a href="index.html"><img src="ShoeVillaBanner.jpg"></a>
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
                <li><a href="cart.html">Cart</a></li>
                <li><a href="login.php">Login</a></li>
            </div>
            <ul class="main-nav">
                <li><a href="index.html"> HOME                       </a></li>
                <li><a href="new_arrival.php"> NEW ARRIVAL          </a></li>
                <li><a href="men.php"> MEN                          </a></li>
                <li><a href="women.php"> WOMEN                      </a></li>
                <li class="active"><a href="sales.php"> SALES       </a></li>
            </ul>

            <div class="sales-catbox">
                <?php 
                    include 'salesProducts.php';
                ?>
            </div>
        </div>
    </header>
</body>
</html>