<?php
$servername = 'localhost';
$user = 'root';
$password = 'root';
$dbname ='f34ee';
// $port = 8889;

// Create connection
$conn = mysqli_connect( $servername, 
                        $user, 
                        $password, 
                        $dbname
                        // $port
                    );

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "SELECT * from products WHERE sales = '1'";
$result = mysqli_query($conn,$query);
$num_results = $result->num_rows;

echo " <ul class='myProduct'>";

for ($i=0; $i <$num_results; $i++) {
    $row = $result->fetch_assoc();
    
    echo "<li>";
    echo "<div>";
    echo "<form action='productDescription.php' method='get'>";
    echo "<input name='productId' type='number' value='".$row['productId']."' hidden>";
    echo "<input name='price' type='text' value='".$row['price']."' hidden>";
    echo "<input name='introduction' type='text' value='".$row['introduction']."' hidden>";
    echo "<input name='photo' type='text' value='".$row['photos']."' hidden>";
    echo "<input name='name' type='text' value='".$row['name']."' hidden>";
    echo "<input type='image' src='images/Product/women/".$row['photos']."' alt='Submit' width='300' height='300'>";
    echo "</form>";
    echo "<center>";
    echo "<p style='font-weight:bold;'>".$row['name']."</p>";
    echo "<p>SHOEVILLA 2018</p>";
    echo "<p>S$".$row['price']."</p>";
    echo "</center>";
    echo "</div>";
    echo "</li>";

}               
?>