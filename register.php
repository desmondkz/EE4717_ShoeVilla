<?php 
include('mySQL.php');
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShoeVilla | User Registration</title>
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
            <h2>Register</h2>
        </div>

        <form method="post" action="register.php">
            <form action="show_post.php" method="post" id=jobForm>
                <!-- Display validation errors here -->
                <?php 
                include('errors.php');
                ?>

                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username" required onchange="validateuserName()" value="<?php echo $username; ?>">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" required onchange="validateEmail()" value="<?php echo $email; ?>">
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password_1">
                </div>
                <div class="input-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_2">
                </div>
                <div class="input-group">
                    <button type="submit" name="reg_user" class="btn">Register</button>
                </div>
                <p>
                    Already a member?   <a href="login.php">Sign in</a>
                </p>
            </form>
        </form>
        <script type="text/javascript" src="js/validation.js"></script>
    </div>
</body>
</html>