<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_banner - contact us</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
    <style>

.container {
  display: flex;
  justify-content: center;
}

.comment-box {
  width: 85%;
  margin-top: 50px;
  background: #fff;
  padding: 5px;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.comment-box p {
  margin: 0 30px 15px;
  font-weight: 300;
  color: #333;
  word-wrap: break-word;
  background: #EEE;
  padding: 5px 10px;
}

.header {
  margin: 15px 20px;
  font-size: 27px;
  font-weight: 600;
}


form ::-webkit-input-placeholder {
  color: #CCC;
  font-weight: 300;
}

input[type="text"], textarea {
  margin: 5px 10px;
  outline: none;
  background: #efefef;
  border: 0;
  padding: 10px;
}

textarea {
  resize: none;
  width: 85%;
}

input[type="text"] {
  width: 50%;
  margin-bottom: 15px;
}

button {
  font-weight: 400;
  margin: 12px 0 0 10px;
  border: 0;
  color: #fff;
  font-size: 15px;
  background: #D3775D;
  padding: 12px 20px 12px 20px;
  text-decoration: none;
  transition: all 0.2s ease;
}
button:hover {
  background: #C15322;
}


reset{
  font-weight: 400;
  margin: 12px 0 0 10px;
  border: 0;
  color: #fff;
  font-size: 15px;
  background: #D3775D;
  padding: 12px 20px 12px 20px;
  text-decoration: none;
  transition: all 0.2s ease;
}
reset:hover {
  background: #C15322;
}

.footer p {
  float: right;
  font-size: 13px;
  margin-bottom: 10px;
  background: #FFF;
}
    </style>

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
          <li><a href="index.php">Home</a></li>
          <li><a href="order.php">Order</a></li>
          <li><a href="offer.php">Offers</a></li>
          <li class="selected"><a href="contact.php">Contact Us</a></li>
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
		<div class="container">
			<div class="comment-box">
			  <div class="comment-form">
				<div class="header">Contact Us</div>
				<form action="mailto:momozz1225@gmail" method="post" enctype="text/plain">
				  <div> 
					<input type="text" id="name" placeholder="Name"/> Name*<br><br>
					<input type='text' name='email' id='email' placeholder="Email"/>  Email*<br><br>
					<input type='text' name='website' id='website' placeholder="Website" />  Website<br><br>
				  </div>
				  <div>
					<textarea id="comment" rows="3" cols="30" placeholder="Comment"></textarea>
				  </div>
				  <button type="submit" value="submit">Submit</button>
				  <button  type="reset" value="Reset" >Reset</button>
				</form>  
			  </div>
			</div>
		  </div>
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
