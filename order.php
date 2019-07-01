<!DOCTYPE HTML>
<html>

<head>
  <title>Contact Pharma</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
        
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
                
          <a href="index.php"><img src="style/logo.png"  width="310" height="120"alt="logo"   align="left" ></a>
           <button class="bu1"  onclick="window.location.href='signup.php'">Sign Up</button><br><br><br><br><br>
              <button class="bu1"  onclick="window.location.href='login.php'">login</button>

        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="index.php">Home</a></li>
          <li class="selected"><a href="order.php">Order</a></li>
          <li><a href="offer.php">Offers</a></li>
          <li><a href="contact.php">Contact Us</a></li>
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
            <p>If you have any idea, please send mail from here.<br /><a href="contact.php">Contact Us</a></p>
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
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
         <table>
         <tr>
            <td> <a href= "product1.php">
					 <img src="style/order/bloderma548.jpg" style="width:100%">
          
          </a>&nbsp</td>
          
          
			<td>	<a href= "product2.php">
				<img src="style/order/Avene778.jpg" style="width:100%">
				</a>&nbsp</td>
				
          
              <td>  <a href= "product3.php">
				<img src="style/order/bloderma698.jpg" style="width:100%">
				</a>&nbsp  </td>
          </tr>
          
					
            <tr> <td> 
                <a href= "product1.php">
                <button  class="des" onclick="window.location.href='another_page%20-%20Copy%20(2).php'">bloderma 548LE</button>
                </a> </td>
				
				<td>	<a href= "product2.php">
                    <button class="des"  onclick="window.location.href='another_page%20-%20Copy%20(3).php'">Avene778  17.99$   </button>	
					</a>&nbsp</td>
			
                    <td><a href= "product3.php">
						 <button  class="des"  onclick="window.location.href='another_page%20-%20Copy%20(3).php'">bloderma698  15.99$   </button>	
					</a>&nbsp</td>
				
            </tr>
              
             </table>
          
          
         
          
          
          
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
