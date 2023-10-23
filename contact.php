<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- google captcha  -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">VisitNepal</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">aboutUs</a>
      <a href="packagee.php">package</a>
      <a href="contact.php">contactUs</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<div class="heading" style="background:url(images/contact.jpg) no-repeat">
   <h1></h1>
</div>

<!-- contactus packages section starts  -->

<section class="booking">

   <h1 class="heading-title">contact us</h1>

   <form action="contact_form.php" method="post" class="book-form">

      <div class="flex">
        
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div><br><br><br>
         <div class="inputBox">
            <span>message :</span>
            <input type="text" placeholder="send us message for inquiry.." name="message" required>
         </div>
         <div class="g-recaptcha" data-sitekey="6LcnADMgAAAAAKmNJi4Faw3yKOw8wujYbrZ_BkPV"></div>
                                <br>
        
        
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- contactus section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="packagee.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> ContactUs</a>
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