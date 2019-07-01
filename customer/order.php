<!DOCTYPE HTML>
<html>

<head>
  <title>Contact Pharma</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
        
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
                
          <a href="index.php"><img src="../style/logo.png"  width="310" height="120"alt="logo"   align="left" ></a>
          

        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="index.php">Home</a></li>
          <li class="selected"><a href="order.php">Order</a></li>
          <li><a href="offer.php">Offers</a></li>
          </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
	  <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h4>Our New Website Launched</h4>
            <h5>April 30, 2018</h5>
          </div>
          <div class="sidebar_base"></div>
        </div>

        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="/search.php" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="../style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        
<?php

    $connect =@ mysql_connect('localhost','root',''); 
    if(!$connect)
    {
        die("database connection failed" .mysql_error());
    }
    $mypharmacy=mysql_select_db('pharmacy');
    if(!$mypharmacy)
    {
     die("database not found".mysql_error());
    }
   $sql = 'SELECT * FROM product';
  
   
    $retrive = mysql_query( $sql, $connect );
   
   if(! $retrive)
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retrive, MYSQL_ASSOC)) 
   {
     
        echo '<div id="medicine"> <h4>'.
         '<span style="color:red">'."  ID: ".'</span>'." {$row['id']}  <br> ".
         '<span style="color:red">'."  name: ".'</span>'." {$row['name']} <br> ".
         '<span style="color:red">'." description: ".'</span>'." {$row['description']} <br> ".
        '<span style="color:red">'." Expirydate: ". '</span>'." {$row['expirydate']} <br><br>  ".
            '</h4></div><br>';
        
   }
   
   mysql_close($connect);
?>
          
          
          
     <!-- insert the page content here -->
      </div>
    </div>
<div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="order.php">Order</a> | <a href="offers.php">Offers</a> | <a href="contact.php">Contact us</a></p>
      <p>Copyright &copy; Contact Pharma | Powered By: HTML5 | CSS | JavaScript</p>
    </div>
  </div>
</body>
</html>
