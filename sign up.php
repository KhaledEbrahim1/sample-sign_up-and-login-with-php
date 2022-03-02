<?php

  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ragiter_CAFE</title>
	<link rel="stylesheet" type="text/css" href="css/sign up.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="imgs/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

 <header>
     <nav>
       <div class="row clearfix">
        <h1 class="logo">heart cafe </h1>
       	    
       	 <ul class="main-nav animated slideInDown" id="check-class">
       	 	<li><a href="Home.html">HOME</a></li>
       	 	<li><a href="Menu.html">MENU</a></li>
       	 	<li><a href="About.html">ABOUT</a></li>
       	 	<li><a href="Contact.html">CONTACT US</a></li>	
       	 </ul> 
         <a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i></a>
       </div>	
     </nav>
     <div class="main-content-header">

<form action="sign up .inc.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="uid"><b>User Name</b></label>
    <input type="text" placeholder="Enter your Name" name="uid" id="uid"required >

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email"  name="user_email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" required > Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
     <a href="log in .php" style="color:white" class="btn"> <button type="button"  name="cancel" class="cancelbtn">Cancel</button> </a>
      <button type="submit" name ="submit-signup" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</div>




    
</header>   

<script type="text/javascript">
   
   function slideshow(){
      var x = document.getElementById('check-class');
      if(x.style.display === "none"){
        x.style.display="block";
      } else{
        x.style.display="none";
      }
   }
 
 </script>
 </body>
</html>