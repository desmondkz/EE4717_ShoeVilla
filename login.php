<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShoeVilla | User Login</title>
    <link rel="stylesheet" href="css/register.css" type="text/css">
</head>



<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="login.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="password_1">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Not yet a member?   <a href="register.php">Sign up</a>
        </p>

    </form>
</body>
</html>
