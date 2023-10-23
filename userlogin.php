

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- swiper css link  -->
   
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">VisitNepal</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="destination.php">destination</a>
      <a href="package.php">package</a>
      <a href="userlogin.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>Log in</h1>
</div>
<!-- login section starts-->



<section class="booking">
<div class="login">
	
		

  <h1 class="heading-title">Login</h1>

   <form action="authenticate.php" method="post" class="book-form">

      <div class="flex">
        
         <div class="inputBox">
            <span>username :</span>
            <i class="fas fa-user"></i>
            <input type="text" placeholder="enter your username" name="username" id="username"  required>
         </div><br><br><br>
         <div class="inputBox">
            <span>password :</span>
            
					<i class="fas fa-lock"></i>
            <input type="password" placeholder="enter your password" name="password" id="password"  required>
         </div>
        
        
        
      </div>

      <input type="submit" value="submit" class="btn" name="send">
      <h2 align="center"><p class="text-center">
          <p class="text-center">
                    Don't have an account?
                    <a href="signup.php">Register</a>
                  </p>
</h2>

   </form>
   

</section>
<!-- login section ends -->


<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

   

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

</section>

<!-- footer section ends -->

