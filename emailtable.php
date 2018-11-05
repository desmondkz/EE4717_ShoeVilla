<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>



<body>
    <center>
        <h2>Purchasing Details</h2>
        <table border="0">
            <th>Order ID</th>
            <th>User ID</th>
            <th>Product ID</th>
            <th>Price</th>
            <th>Date</th>

            <?php 
                include 'mySQL.php';
                $cmd = "SELECT * FROM orders";
                $resultss = mysqli_query($conn, $cmd);

                while($row=mysqli_fetch_array($resultss)) {
                    $orderId = $row['orderId'];
                    $userId = $row['userId'];
                    $productId = $row['productId'];
                    $price = $row['price'];
                    $date = $row['date'];
            ?>
            <tr>
                <td><?php  echo $orderId;  ?></td>
                <td><?php  echo $userId;  ?></td>
                <td><?php  echo $productId;  ?></td>
                <td><?php  echo $price;  ?></td>
                <td><?php  echo $date;  ?></td>
            </tr>
            <?php
                }
            ?>
        </table> 
    </center>
</body>
</html>