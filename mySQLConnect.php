<?php 
    session_start();

    $username = "";
    $email = "";
    $errors = array();

    // Connect to database
    $db = mysqli_connect('localhost', 'root', '', 'users');

    // if the register button is clicked
    if (isset($_POST['register'])) {
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password_1 = mysql_real_escape_string($_POST['password_1']);
        $password_2 = mysql_real_escape_string($_POST['password_2']);

    }

    // ensure that form fields are filled properly
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // if there are no errors, save user to database
    if (count($errors) == 0) {
        // encrypt password before storing in database
        $password = md5($password_1);
        $sql = "INSERT INTO users (userName, email, password)
                    VALUES ('$username', '$email', '$password')";

        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in!";
        header('location: index.php'); // redirect to homepage 
    }


?>