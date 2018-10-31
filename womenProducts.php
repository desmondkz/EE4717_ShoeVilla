<?php
$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname ="f34ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "SELECT * from products WHERE gender = 'female'";
$result = mysqli_query($conn,$query);
$num_results = $result->num_rows;

echo " <ul class='myProduct'>";

for ($i=0; $i <$num_results; $i++) {
    $row = $result->fetch_assoc();
    echo "<li>";
    echo "<div>";
    echo "<a href='productDescription.php'><img src='images/Product/women/".$row['photos']."' width='300' height='300'></a>";
    echo "<center>";
    echo "<p style='font-weight:bold;'>".$row['name']."</p>";
    echo "<p>SHOEVILLA 2018</p>";
    echo "<p>S$".$row['price']."</p>";
    echo "</center>";
    echo "</div>";
    echo "</li>";
}               
?>