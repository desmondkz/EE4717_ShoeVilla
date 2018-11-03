<?php 
    session_start();

    // store to test if they were logged in
    $old_user = $_SESSION['username'];
    unset($_SESSION['username']);
    session_destroy();
?>

<html>
<head>
    <title>ShoeVilla | Logout</title>
    <link rel="stylesheet" href="css/register.css" type="text/css">
    <link rel="stylesheet" href="css/index_style.css" type="text/css">
    <!--Website Tab Icon-->
    <link rel="shortcut icon" href="ShoeVillaBanner.ico">
</head>

<center>
    <body>
        <div class="wrapper">
            <!--Sub-header-->
            <div class="subheader">
                <p class="text" align="center">FREE INTERNATIONAL STANDARD SHIPPING ON ORDERS OF $200+</p>
            </div>
            <!--Logo-->
            <div class="login-logo">
                <a href="index.php"><img src="ShoeVillaBanner.jpg"></a>
            </div>
            
            <div class="logout">
                <h1>Log out</h1>    
            </div>

            <div class="logout">
                <?php 
                    if (!empty($old_user)) {
                        echo 'You are now logged out. <br />';
                    }
                    else {
                        // if they weren't logged in but came to this page somehow
                        echo 'You were not logged in, so please log in first.';
                    }
                ?>
                <a href="index.php">Return to main page.</a>
            </div>
        </div>
    </body>
</center>
</html>