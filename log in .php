<?php

  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ragiter_CAFE</title>
	<link rel="stylesheet" type="text/css" href="css/ragister.css">
<link rel="icon" href="imgs/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

     <div class="container">
  <form action="log in . inc .php" method="POST">
    <div class="row">
      <h1 style="text-align:center">Login </h1>      
        <input type="text" name="username" placeholder="Username/Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" name ="login-submit">
      </div>

    </div>
    <div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="Sign up.php" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
  
</div>

</form>
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