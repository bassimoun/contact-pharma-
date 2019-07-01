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
           <button class="bu1"  onclick="window.location.href='signup.php'">Sign Up</button>

        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="index.php">Home</a></li>
          <li><a href="order.php">Order</a></li>
          <li><a href="offer.php">Offers</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
      <br><br>
      
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
          <div class="borderup">
<form method="post" action="signupProcess.php">



    <label for="usrname">Username</label>

    <input type="text" id="usrname"  name="usrname" required>
	
	
	
	<div id="email_div">
	<br>
   	  <label >Email</label> 
   	  <input type="email" name="email" class="textInput" required>
   	  <div id="email_error"></div>
   	</div>
	<br>

	
    <label for="usrname">Date Of Birth</label>

    <input type="text" id="DateOfBirth"  name="DateOfBirth" required>
	<br><br>
	
    <label for="usrname">Phone Number</label>

    <input type="text" id="phoneNumber	"  name="phoneNumber" required>
	<br><br>
	
    <label for="usrname">Address</label>

    <input type="text" id="Address"  name="Address" required>
	<br><br>
	
    <label for="psw">Password</label>
  <input type="password" id="psw" name="psw" onkeyup='check();' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>


  

<br><br>

	
   	   <label>Password confirm</label> 
   	   <input type="password" n  name="confirmpsw" id="confirmpsw"  onkeyup='check();' required>
	   <span id='message'></span>
<br><br>
   	   <div id="password_error"></div>
	   <input type="submit" value="Submit">



</form>
 </div>	  
      </div>
    </div>
<div id="content_footer"></div>
<div id="footer">
      <p><a href="index.php">Home</a> | <a href="order.php">Order</a> | <a href="offers.php">Offers</a> | <a href="contact.php">Contact us</a></p>
      <p>Copyright &copy; Contact Pharma | Powered By: HTML5 | CSS | JavaScript</p>
</div>
  </div>

      <script type="text/javascript">
	  
         
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

	  var check = function() {
  if (document.getElementById('psw').value ==
    document.getElementById('confirmpsw').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
  }

myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

myInput.onkeyup = function() {
 
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
  if (myInput.value!= password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}


      </script>
</body>
</html>
