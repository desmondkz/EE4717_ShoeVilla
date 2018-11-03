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
            <!--Search Bar-->
            <!-- <div class="search">
                <form action="">
                    <input class="search-area" type="text" name="text" placeholder="Search">
                    <input class="search-btn" type="submit" name="submit" value="SEARCH">
                </form>
            </div> -->
            <!--User Menu-->
            <div class="user-menu">
                <li class="active"><a href="login.php">Cart</a></li>
                <li><a href="login.php">Login</a></li>
            </div>
            <!--Main Navigation-->
            <ul class="main-nav">
                <li><a href="index.html"> HOME                       </a></li>
                <li><a href="new_arrival.php"> NEW ARRIVAL          </a></li>
                <li><a href="men.php"> MEN                          </a></li>
                <li><a href="women.php"> WOMEN                      </a></li>
                <li><a href="sales.php"> SALES                      </a></li>
            </ul>    
        </div>
    </header>

    <div class='myCart'>
        <h1 class='h1-cart'>SHOPPING BAG</h1>
        <form action='' method='post' name='cart' id='cartItemForm'>
            <table id='cartTable' class='itemList'>
                <thead>
                    <th class='sectionHeader' id='productTitle' colspan='2'>Product</th>
                    <th class='sectionHeader' colspan='2'>Quantity</th>
                    <th class='sectionHeader'>Price</th>
                </thead>
                <tbody>
                    <tr class='cartRow'>
                        <td class='itemImage'>
                            <img class='image' src='images/Product/women/men_1.jpg'>
                        </td>
                        <td class='itemDetails'>
                            <div class='productList'>
                                <div class='name'>SPEED TRAINERS</div>
                                <div class='id'>#1</div>
                                <div class='color'>Yellow</div>
                                <div class='size'>37</div>
                            </div>
                        </td>
                        <td class='itemQuantity' colspan='2'>
                            <div class='divQuantity'>
                                <input type='number' id='quantity' name='quantity' min='1' value='1'>    
                            </div>
                            <button class='removeItem' type='submit' value='Remove' name='deleteProduct'>
                                <span>
                                    REMOVE
                                </span>
                            </button>
                        </td>
                        <td class='itemPrice' >
                            <span class='price'>$999.00</span>
                        </td>
                    </tr>
                    <tr class='subtotalRow'>
                        <td class='subtotal' colspan='4'>
                            SUBTOTAL
                        </td>
                        <td>
                            $999.00
                        </td>
                    </tr>
                    <tr class='checkoutRow'>
                        <td colspan='5'>
                            <button class='checkoutButton'>
                            <a href=''>
                                <span class='checkoutText'>
                                    PROCEED TO CHECKOUT
                                </span>
                            </a>
                        </button>
                    
                        </td>
                        </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>