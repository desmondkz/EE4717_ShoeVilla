<?php 
    session_start();

    // Initializing variables
    $username = "";
    $email    = "";
    $errors   = array();
    
    // Create connection
    $conn = mysqli_connect( 'localhost',  
                            'root',    
                            'root', 
                            'f34ee'
                        );
    $conn_orderID = mysqli_connect( 'localhost',  
                            'root',    
                            'root', 
                            'f34ee'
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
            $query = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";

            mysqli_query($conn, $query);
             
            $_SESSION['username'] = $username;
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
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) == 1) {
                $row = $results->fetch_assoc();
                $_SESSION['username'] = $username;
                $_SESSION['userId'] = $row['id'];
                header('location: index.php');
            }else {
                array_push($errors, "Wrong username/password combination or You are not registered.");
            }
        }
    }

    // Logout
    if (isset($_GET['logout'])) {
        session_destroy();
        header('location: index.php');
    }

    // when purchase button is clicked
    if (isset($_POST['purchase'])) {
        require ('email.php');

        // Receive all input values from billing form
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $address1 = mysqli_real_escape_string($conn, $_POST['address1']);
        $address2 = mysqli_real_escape_string($conn, $_POST['address2']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $nameoncard = mysqli_real_escape_string($conn, $_POST['nameoncard']);
        $cardnumber = mysqli_real_escape_string($conn, $_POST['cardnumber']);
        $cardtype = mysqli_real_escape_string($conn, $_POST['cardtype']);
        $month = mysqli_real_escape_string($conn, $_POST['month']);
        $year = mysqli_real_escape_string($conn, $_POST['year']);
        $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
        
        $mysql_date_now = date("Y-m-d H:i:s");
        $total = 0;
        $username = $_SESSION['username'];
        $query="INSERT INTO orderIDs (id) VALUE (NULL)";
        mysqli_query($conn_orderID, $query);
        $orderID=mysqli_insert_id($conn_orderID);
        echo $userId;
        echo 'outside';
        for ($i=1; $i < 100; $i++){
            if(!empty($_SESSION['cart'][$i])){
                for($j=36; $j<42; $j++){
                    if(!empty($_SESSION['cart'][$i][$j])){
                        echo 'yes';
                        $qty = (int)$_SESSION['cart'][$i][$j];
                        $price = (int)$_SESSION['cart'][$i]['price'];
                        $totalPrice = $qty * $price;
                        $total = $total + $totalPrice;
                        $size = $j;
                        $productId =$i;
                        $price=$_SESSION['cart'][$i]['price'];
                        $introduction=$_SESSION['cart'][$i]['introduction'];
                        $photo=$_SESSION['cart'][$i]['photo'];
                        $name=$_SESSION['cart'][$i]['name'];
                        $color=$_SESSION['cart'][$i]['color'];
                        $photo=$_SESSION['cart'][$i]['photo'];
                        $query="INSERT INTO orders (
                                            orderId, 
                                            username, 
                                            productId,
                                            productname,
                                            color,
                                            size,
                                            quantity,
                                            subtotal,
                                            datepurchase)
                                  VALUE (
                                            '$orderID',
                                            '$username',                                           
                                            '$productId',
                                            '$name',
                                            '$color',
                                            '$size',
                                            '$qty',
                                            '$totalPrice',
                                            '$mysql_date_now'
                                            )";
                        mysqli_query($conn, $query);

                        }
                }
                }
            }
        

                        
        // ensure that form fields are filled properly
        if (empty($firstname)) {array_push($errors, "Please fill in you First name");}
        if (empty($lastname)) {array_push($errors, "Please fill in you Last name");}
        if (empty($address1)) {array_push($errors, "Please fill in your billing address");}
        if (empty($country)) {array_push($errors, "Please indicate your country");}
        if (empty($state)) {array_push($errors, "Please indicate your state");}
        if (empty($city)) {array_push($errors, "Please indicate your city");}
        if (empty($zipcode)) {array_push($errors, "Please fill in your zipcode");}
        if (empty($phone)) {array_push($errors, "Please fill in your phone number");}
        if (empty($nameoncard)) {array_push($errors, "Please fill in the name on your Credit card");}
        if (empty($cardnumber)) {array_push($errors, "Please fill in your Credit card number");}
        if (empty($cvv)) {array_push($errors, "Please fill in your CVV");}

        // if there are no errors, log the order info into database
        if (count($errors) == 0) {
            $cvv = md5($cvv);
            $query = "INSERT INTO billing_info (
                                            firstname, 
                                            lastname, 
                                            address1,
                                            address2,
                                            country,
                                            state,
                                            city,
                                            zipcode,
                                            phone,
                                            nameoncard,
                                            cardnumber,
                                            cardtype,
                                            month,
                                            year,
                                            cvv)
                                  VALUE (
                                            '$firstname',
                                            '$lastname',
                                            '$address1',
                                            '$address2',
                                            '$country',
                                            '$state',
                                            '$city',
                                            '$zipcode',
                                            '$phone',
                                            '$nameoncard',
                                            '$cardnumber',
                                            '$cardtype',
                                            '$month',
                                            '$year',
                                            '$cvv'
                                            )";
            mysqli_query($conn, $query);
        }
        unset($_SESSION['cart']);
        header('location: index.php');
    
    }
?>