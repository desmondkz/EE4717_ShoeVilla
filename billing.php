<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShoeVilla | My Bill</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index_style.css" rel="stylesheet" type="text/css">
    <link href="css/billing_style.css" rel="stylesheet" type="text/css">
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
                <a href="index.php"><img src="ShoeVillaBanner.jpg"></a>
            </div>

            <!--User Menu-->
            <div class="user-menu">
                <li><a href="cart.php">Cart</a></li>
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
                <li><a href="index.php"> HOME        </a></li>
                <li><a href="new_arrival.php"> NEW ARRIVAL          </a></li>
                <li><a href="men.php"> MEN                          </a></li>
                <li><a href="women.php"> WOMEN                      </a></li>
                <li class="active"><a href="sales.php"> SALES                      </a></li>
            </ul>
            </div>  
        </div>
    </header>

    <div class="myBill">
        <h1 class='h1-billing'>BILLING INFORMATION</h1>

        <form action="billing.php" method="post">
            <table class="billTable" border="0">
                <tr>
                    <td>
                        <label>FIRST NAME</label>
                        <input type="text" name="firstname">
                    </td>
                    <td>
                        <label>LAST NAME</label>
                        <input type="text" name="lastname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>ADDRESS 1</label>
                        <input type="text" name="address1">
                    </td>
                    <td>
                        <label>ADDRESS 2 (OPTIONAL)</label>                        
                        <input type="text" name="address2">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>COUNTRY</label>
                        <input type="text" name="country">
                    </td>
                    <td>
                        <label>STATE</label>
                        <input type="text" name="state">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>CITY</label>
                        <input type="text" name="city">
                    </td>
                    <td>
                        <label>ZIPCODE</label>
                        <input type="text" name="zipcode">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>PHONE</label>
                        <input type="text" name="phone">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>NAME ON CARD</label>
                        <input type="text" name="nameoncard">
                    </td>
                    <td>
                        <label>CARD NUMBER</label>
                        <input type="text" name="cardnumber">
                    </td>

                </tr>

                <tr>
                    <td>
                        <label>TYPE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                        <select name="cardType" class="card-type">
                            <option value="visa">Visa</option>
                            <option value="master">Master</option>
                        </select>
                    </td>
                    <td>
                        <label>MONTH</label>
                        <select name="month" class="expire-date">
                            <option value="jan">January</option>
                            <option value="feb">February</option>
                            <option value="mar">March</option>
                            <option value="apr">April</option>
                            <option value="may">May</option>
                            <option value="jun">June</option>
                            <option value="jul">July</option>
                            <option value="aug">August</option>
                            <option value="sep">September</option>
                            <option value="oct">October</option>
                            <option value="nov">November</option>
                            <option value="dec">December</option>
                        </select>
                        <label>&nbsp&nbsp&nbsp&nbsp&nbspYEAR</label>
                        <select name="year" class="expire-date">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>CVV</label>
                        <input type="password" name="cvv">
                    </td>
                </tr>
            </table>

            <button type="submit" name="purchase" class="btn">PURCHASE</button>
        </form>
    </div>
</body>
</html>