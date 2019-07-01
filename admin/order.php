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
         <div id="medicine">
          <h4>Add data in product</h4>
             <form  method="post" action="ADDdata.php">
                 <input type="text" name="id" placeholder="id" ><br><br>
                 <input type="text" name="name" placeholder="name" ><br><br>
                 <input type="text" name="description" placeholder="description"><br><br>
                 <input type="number" name="price" placeholder="price"><br><br>
                 <input type="date" name="expirydate" placeholder="expirydate" ><br><br>             
                 <input type="submit" name="insert" value="add" onsubmit="ADDdata.php">  
              </form>
          </div>
          
           <div id="medicine">
            <h4>update data in product</h4>
             <form  method="post" action="UPDATEdata.php">
                 <input type="text" name="id" placeholder="id" ><br><br>
                 <input type="number" name="price" placeholder="price"><br><br>
                 <input type="submit" name="update" value="update" onsubmit="UPDATEdata.php">
            </form>
          </div>
        <div id="medicine">
          <h4>remove data in product</h4>
            <form  method="post" action="Deletedata.php">
                 <input type="text" name="id" placeholder="id" ><br><br>
                 <input type="submit" name="delete" value="delete" onsubmit="Deletedata.php">
             </form>
          </div>
          
        <div id="medicine">
          <h4>search data in product</h4>
            <form  method="post" action="IUD_data.php">
                <input type="text" name="id" placeholder="id" ><br><br>   
                 <input type="submit" name="search" value="search" onsubmit="IUD_data.php">
             </form>
          </div>
          
          
          
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
