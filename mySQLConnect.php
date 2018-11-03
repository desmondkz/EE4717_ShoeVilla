<?php 
    session_start();

    // Initializing variables
    $username = "";
    $email    = "";
    $errors   = array();
    
    // Create connection
    $conn = mysqli_connect( 'localhost',  
                            'f34ee',    
                            'f34ee', 
                            'f34ee',
                            8889
                        );
    
    // if the register button is clicked, register user
    if (isset($_POST['reg_user'])) {
        // Receive all input values from form
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        
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

        // First check the database to make sure if there is duplicate users
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        // if user exists
        if ($user) {
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
            } 
        }
        

        // if there are no errors, save user to database
        if (count($errors) == 0) {
            // encrypt password before storing in database
            $password = md5($password_1);
            //$password = $password_1;
            $query = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";

            mysqli_query($conn, $query);
             
            $_SESSION['username'] = $username;
            //$_SESSION['success'] = "You are now logged in!";
            header('location: index.php'); // redirect to homepage 
        }    
    }

    // log user in from login page
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
      
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
      
        if (count($errors) == 0) {
            $password = md5($password);
            //$password = $password;
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                //$_SESSION['success'] = "You are now logged in!";
              header('location: index.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

    // Logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }
?>