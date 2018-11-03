<?php  //cart.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
// var_dump($_POST);
if (isset($_POST['id']) && isset($_POST['size'])) {
    $id = $_POST['id'];
    $size = $_POST['size'];
	unset($_SESSION['cart'][$id][$size]);
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
                        echo $_SESSION['username'];
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }
                    else {
                        echo '<strong>Guest</strong>';
                        echo '<li><a href="login.php">Login</a></li>';
                    }
                ?>
            </div>

            <!--Main Navigation-->
            <ul class="main-nav">
                <li><a href="index.php"> HOME                       </a></li>
                <li><a href="new_arrival.php"> NEW ARRIVAL          </a></li>
                <li><a href="men.php"> MEN                          </a></li>
                <li><a href="women.php"> WOMEN                      </a></li>
                <li><a href="sales.php"> SALES                      </a></li>
            </ul>    
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
                    for ($i=1; $i < 65; $i++){
                        // $empty = $i;
                        // $empty = $i+1;
                        if(!empty($_SESSION['cart'][$i])){
                            for($j=36; $j<42; $j++){
                                if(!empty($_SESSION['cart'][$i][$j])){
                                    $total = $total + $_SESSION['cart'][$i]['price'];
                                    echo "<tr class='cartRow'>
                                    <td class='itemImage'>
                                        <img class='image' src='images/Product/women/".$_SESSION['cart'][$i]['photo']."'>
                                    </td>
                                    <td class='itemDetails'>
                                        <div class='productList'>
                                            <div class='name'>".$_SESSION['cart'][$i]['name']."</div>
                                            <div class='id'>".$i."</div>
                                            <div class='color'>Yellow</div>
                                            <div class='size'>".$j."</div>
                                        </div>
                                    </td>
                                    <td class='itemQuantity' colspan='2'>
                                        <div class='divQuantity'>
                                            <span id='quantity' value=''>".$_SESSION['cart'][$i][$j]."</span>    
                                        </div>";
                                    echo "<form action='".$_SERVER['PHP_SELF']."' method='post'>
                                        <input name='id' type='number' value='".$i."' hidden>
                                        <input name='size' type='number' value='".$j."' hidden>
                                        <input type='submit' name='submit' class='submit' id='removeItem' value='remove'>
                                        </button>
                                        </form>";
                                    echo "</td>
                                    <td class='itemPrice' >
                                        <span class='price'>$".number_format($_SESSION['cart'][$i]['price'],2)."</span>
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
                        ".number_format($total,2)."
                    </td>";
                    ?>
                    <tr class='checkoutRow'>
                        <td colspan='5'>
                            <button class='checkoutButton'>
                            <a href=''>
                                <span class='checkoutText'>
                                    CHECKOUT
                                </span>
                            </a>
                            </button>
                            or
                            <button class='loginCheckoutButton'>
                            <a href=''>
                                <span class='loginCheckoutText'>
                                    LOGIN & CHECKOUT
                                </span>
                            </a>
                            </button>
                        </td>
                        </tr>
                </tbody>
            </table>
    </div>
</body>
</html>