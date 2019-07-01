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

// sql to delete a record
$id= $_POST['id'];
$sql = "DELETE FROM product WHERE id = $id";

if (mysqli_query($conn, $sql))
{
   echo "<script>alert('product deleted succesfully');document.location='order.php'</script>";
}
//error massege
else
{
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>