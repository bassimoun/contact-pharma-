<?php

    $link = mysqli_connect("localhost", "root", "Wo^z9Q9fV5QdDAmlGW","pharmacy");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $usrname = mysqli_real_escape_string($link, $_REQUEST['usrname']);
    $psw = mysqli_real_escape_string($link, $_REQUEST['psw']);
    $DateOfBirth = mysqli_real_escape_string($link, $_REQUEST['DateOfBirth']);
    $phoneNumber = mysqli_real_escape_string($link, $_REQUEST['phoneNumber']);
    $Address = mysqli_real_escape_string($link, $_REQUEST['Address']);

    //add users to the database
    $sql = "INSERT INTO client (username,password,DateOfBirth,phoneNumber,Address) VALUES ('$usrname','$psw','$DateOfBirth','$phoneNumber','$Address')";
    if(mysqli_query($link, $sql)){
        header("Location: login.php");
    } //error massege

    else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
?>