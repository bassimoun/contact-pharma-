<?php
$servername = "localhost";
$username = "root";
$password = "Wo^z9Q9fV5QdDAmlGW";
$dbname = "pharmacy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$id= $_POST['id'];
$sql = "SELECT * FROM product WHERE id = $id";
$result = $conn->query($sql);


    // output data of each row
while($row = $result->fetch_assoc()) 
{
       
        echo "name: " .  $row["name"].  "<br>";
        echo "description: " .  $row["description"].  "<br>";
        echo "price: " .  $row["price"].  "<br>";
        echo "epiredate: " .  $row["expirydate"].  "<br>";

}

$conn->close();
?> 