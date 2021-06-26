# Towards-Ground-Sports-by-web-application
<?php
  // Turn off all error reporting
  error_reporting(0);
  
  $msg = $_GET['msg'];
  if($msg=="ok")
  {
    echo '<script>alert("User add Successfully");</script>';
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Towards Ground Sports</title>
</head>
<body>
    <nav class="navbar background" <img src="Image/grd1.jpg" alt="logo">>
        <ul class="nav-list">
            <div class="logo"><img src="image/Logo.jpeg" alt="logo"></div> 
            <li> <a href="#home">Home</a></li>
            <li> <a href="#about">About</a></li>
            <li> <a href="#login">LogIn</a></li>
            <li> <a href="#contact">ContactUs</a></li>
        </ul>
         <div class="rightNav">
            
         </div>
        
    </nav>
    <section class="background firstSection">
        <div class="box main">
            <div class="firstHalf">
                <p class="text-big">The start for Healthy life</p>
                <p class="text-small"> just make yourself cheering and join us.</p>
            </div>
           <div class="secondHalf">
               <img src="image/Logo.jpeg" alt="">
           </div>
        </div>

    </section>

    <section class="secRight">
        <div class="paras">
        <p class="sectionTag">
         We have a plan for you!
        </p>
        <p class="sectionSubTag">
        &nbsp &nbsp &nbspWe are here with a platform where you can enjoy playing your choice games.  <br> You just have to log in to join us. Add in group and decide your favourite. Let's do it!
        </p>
        </div>
    </section>
    <hr>

    <!--login page-->
  <section class="login-page">

    <!--login-->
      <div class="login">
      <div class="login-content">
          <h2>Login</h2>
          <form class="login-form" action="login_check.php">
              <input type="text" placeholder="Enter your email " class= "login-user-info" name="email" required>
              <input type="password" placeholder="Enter your password" class= "login-password" name="pass" required>
              <div>
                  <button type="submit"class="login-form-btn" >Log In</button>
              </div>
          </form>
      </div>
  
      <footer class="login-footer">
      <p>New Here?<a href="signin.html"> Sign Up</a></p>
      </footer>
      </div>
    <script src="main.js"></script>
    
    

</body>
</html>
