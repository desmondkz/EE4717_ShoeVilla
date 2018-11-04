<?php  //cart.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
// var_dump($_POST);
if (isset($_POST['empty'])) {
    $id = $_POST['id'];
    $size = $_POST['size'];
	unset($_SESSION['cart'][$id][$size]);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $size = $_POST['size'];
	$_SESSION['cart'][$id][$size] = $_POST['qty'];
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShoeVilla | My Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index_style.css" rel="stylesheet" type="text/css">
    <link href="css/cart_style.css" rel="stylesheet" type="text/css">
    <!--Website Tab Icon-->
    <link rel="shortcut icon" href="ShoeVillaBanner.ico">
</head>

<body>
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
                <li class="active"><a href="cart.php">Cart</a></li>
                <?php    
                    if (isset($_SESSION['username'])) {
                        // echo "&nbsp &nbsp";
                        echo '<li><a href="logout.php">Logout</a></li>';
                        echo "<li><strong>".$_SESSION['username']."</strong></li>";
                    }
                    else {
                        // echo "&nbsp";
                        echo '<li><a href="login.php">Login</a></li>';
                        echo '<li><strong>Guest</strong></li>';                    
                    }
                ?>
            </div>

                        <!--Main Navigation-->
            <div class='nav-div'>
            <ul class="main-nav">
                <li class="active"><a href="index.php"> HOME        </a></li>
                <li><a href="new_arrival.php"> NEW ARRIVAL          </a></li>
                <li><a href="men.php"> MEN                          </a></li>
                <li><a href="women.php"> WOMEN                      </a></li>
                <li><a href="sales.php"> SALES                      </a></li>
            </ul>
            </div>

  
        </div>
    </header>

    <div class='myCart'>
        <h1 class='h1-cart'>SHOPPING BAG</h1>
            <table id='cartTable' class='itemList'>
                <thead>
                    <th class='sectionHeader' id='productTitle' colspan='2'>Product</th>
                    <th class='sectionHeader' colspan='2'>Quantity</th>
                    <th class='sectionHeader'>Price</th>
                </thead>
                <tbody>


                    <?php 
                    $total = 0;
                    // echo "count:";
                    // var_dump($_SESSION['cart']);
                    for ($i=1; $i < 100; $i++){
                        // $empty = $i;
                        // $empty = $i+1;
                        if(!empty($_SESSION['cart'][$i])){
                            for($j=36; $j<42; $j++){
                                if(!empty($_SESSION['cart'][$i][$j])){
                                    $price = (int)$_SESSION['cart'][$i][$j];
                                    $qty = (int)$_SESSION['cart'][$i]['price'];
                                    $totalPrice = $qty * $price;
                                    $total = $total + $totalPrice;
                                    echo "<tr class='cartRow'>
                                    <td class='itemImage'>";
                                    echo "<form action='productDescription.php' method='get'>";
                                    echo "<input name='productId' type='number' value='".$_SESSION['cart'][$i]['productId']."' hidden>";
                                    echo "<input name='price' type='text' value='".$_SESSION['cart'][$i]['price']."' hidden>";
                                    echo "<input name='introduction' type='text' value='".$_SESSION['cart'][$i]['introduction']."' hidden>";
                                    echo "<input name='photo' type='text' value='".$_SESSION['cart'][$i]['photo']."' hidden>";
                                    echo "<input name='name' type='text' value='".$_SESSION['cart'][$i]['name']."' hidden>";
                                    echo "<input name='color' type='text' value='".$_SESSION['cart'][$i]['color']."' hidden>";
                                    echo "<input type='image' class='image' src='images/Product/women/".$_SESSION['cart'][$i]['photo']."' alt='Submit' width='300' height='300'>";
                                    echo "</form>";
                                    echo "
                                    </td>
                                    <td class='itemDetails'>
                                        <div class='productList'>
                                            <div class='name'>".$_SESSION['cart'][$i]['name']."</div>
                                            <br>
                                            <div class='color'>".$_SESSION['cart'][$i]['color']."</div>
                                            <div class='size'>".$j."</div>
                                        </div>
                                    </td>
                                    <td class='itemQuantity' colspan='2'>
                                        <form action='".$_SERVER['PHP_SELF']."' method='post'>
                                        <div class='divQuantity'>
                                            <input type='number' name='qty' class='quantity' value='".$_SESSION['cart'][$i][$j]."'>    
                                        </div>";
                                    echo "
                                        <input name='id' type='number' value='".$i."' hidden>
                                        <input name='size' type='number' value='".$j."' hidden>
                                        <div>
                                        <input type='submit' name='empty' class='remove' id='removeItem' value='remove'>
                                        <div>
                                        </div>
                                        <input type='submit' name='update' class='update' id='removeItem' value='update'>
                                        </div>
                                        </button>
                                        </form>";
                                    echo "</td>
                                    <td class='itemPrice' >
                                        <div class='priceDiv'>
                                        <span class='price'>$".number_format($totalPrice,2)."</span>
                                        </div>
                                    </td>
                                </tr>";    
                                }
                            }
                        }
                    } 
                    echo "<tr class='subtotalRow'>
                    <td class='subtotal' colspan='4'>
                        SUBTOTAL
                    </td>
                    <td>
                        $".number_format($total,2)."
                    </td>";
                    ?>
                    <tr class='checkoutRow'>
                        <td colspan='5'>
                            <button class='checkoutButton'>
                            <a href='billing.php'>
                                <span class='checkoutText'>
                                    CHECKOUT
                                </span>
                            </a>
                            </button>
                            <?php
                            if (!isset($_SESSION['username'])) {
                                echo "
                                or
                                <button class='loginCheckoutButton'>
                                <a href='login.php'>
                                    <span class='loginCheckoutText'>
                                        LOGIN & CHECKOUT
                                    </span>
                                </a>
                                </button>";
                            }
                            ?>
                        </td>
                        </tr>
                </tbody>
            </table>
    </div>

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