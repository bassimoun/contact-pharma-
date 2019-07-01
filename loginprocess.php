<?php
    $link = mysqli_connect("localhost", "root", "Wo^z9Q9fV5QdDAmlGW","pharmacy");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username=stripcslashes($username);
        $password=stripcslashes($password);    
        $username=mysql_real_escape_string($username);
        $password=mysql_real_escape_string($password);       

        $resultc=mysql_query("select * from client where username='$username' and password='$password'")
            or die("incorrect username or password".mysql_error());
        $rowc =mysql_fetch_array($resultc);

        $resulta=mysql_query("select * from admin where username='$username' and password='$password'")
            or die("incorrect username or password".mysql_error());
        $rowa =mysql_fetch_array($resulta);
    //go to admin side or client side
    if($rowc['username'] == $username && $rowc['password'] == $password)
    {  
        header("Location: customer/index.php");    
    }
    elseif ($rowa['username'] == $username && $rowa['password'] == $password)
    {  
        header("Location: admin/index.php");
    }
 

    else {echo "failed to login";}
    mysqli_close($mypharmacy);
?>