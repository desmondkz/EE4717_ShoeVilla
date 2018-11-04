<?php include('mySQLConnect.php'); ?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShoeVilla | User Login</title>
    <link rel="stylesheet" href="css/register.css" type="text/css">
    <link rel="stylesheet" href="css/index_style.css" type="text/css">
    <!--Website Tab Icon-->
    <link rel="shortcut icon" href="ShoeVillaBanner.ico">
</head>



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

        <div class="header">
            <h2>Login</h2>
        </div>

        <form method="post" action="login.php">
            <form action="show_post.php" method="post" id=jobForm>
                <!-- Display validation errors here -->
                <?php 
                include('errors.php');
                ?>

                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username" required onchange="validateuserName()">
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <div class="input-group">
                    <button type="submit" name="login_user" class="btn">Login</button>
                </div>
                <p>
                    Not yet a member?   <a href="register.php">Sign up</a>
                </p>
            </form>
        </form>
        <script type="text/javascript" src="js/validation.js"></script>
    </div>
</body>
</html>
