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
           <button class="bu1"  onclick="window.location.href='signup.php'">Sign Up</button>><br><br><br><br><br>
              <button class="bu1"  onclick="window.location.href='login.php'">login</button>

        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="index.php">Home</a></li>
          <li><a href="order.php">Order</a></li>
          <li class="selected"><a href="offer.php">Offers</a></li>
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
        
<div class="content display-container2">
    <br><br>
    
<div class="display-container mySlides">
  <img src="style/offers/Antheliosxl598.jpg" style="width:55%">
  <div class="display-bottomleft large container padding-16 black">
        Anthelios XL only 598LE
  </div>
</div>

<div class="display-container mySlides">
  <img src="style/offers/Avene598.jpg" style="width:55%">
  <div class="display-bottomleft large container padding-16 black">
    Avene 598LE 
  </div>
</div>



        
    <div class="display-container mySlides">
  <img src="style/offers/ultrasun520ext.jpg" style="width:55%">
  <div class="display-bottomleft large container padding-16 black">
    ultrasun extreme only 520LE
        </div>
    </div>
    
    <div class="display-container mySlides">
  <img src="style/offers/ultrasun525sport.jpg" style="width:55%">
  <div class="display-bottomleft large container padding-16 black">
    ultrasun sport only 525LE
  </div>
    </div>

</div>  
      <script>
    var slideIndex = 0;
    showDivs(slideIndex);

    

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");  
      for (i = 0; i < x.length; i++) 
      {
         x[i].style.display = "none";  
      }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";  
        setTimeout(showDivs,4000);
    }
          </script>
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
