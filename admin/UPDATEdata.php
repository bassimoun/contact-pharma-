<?php
$servername = "localhost";
$username = "root";
$password = "Wo^z9Q9fV5QdDAmlGW";
$dbname = "pharmacy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

// sql to update a record
$id= $_POST['id'];
$price= $_POST['price'];
$sql = "UPDATE product SET price='$price'  WHERE id = $id";


if (mysqli_query($conn, $sql))
{
   echo "<script>alert('product updated succesfully');document.location='order.php'</script>";
}
//error massege
else
{
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>