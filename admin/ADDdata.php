<?php

    $link = mysqli_connect("localhost", "root", "Wo^z9Q9fV5QdDAmlGW","pharmacy");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $id= mysqli_real_escape_string($link, $_REQUEST['id']);
    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
    $description = mysqli_real_escape_string($link, $_REQUEST['description']);
    $price = mysqli_real_escape_string($link, $_REQUEST['price']);
    $expirydate = mysqli_real_escape_string($link, $_REQUEST['expirydate']);
  
    $sql = "INSERT INTO product (id,name,description,price,expirydate) VALUES (NULL,'$name','$description','$price','$expirydate')";
    if(mysqli_query($link, $sql)){
        
        echo "<script>alert('product added succesfully');document.location='order.php'</script>";
       
    } 
    else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
?>