<?php 

  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>




   
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo"><span>T</span>ravel <span>A</span>gency</a>

   <nav class="navbar">
      
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="user.php"><img src="images/user.png" alt="User.png">   </a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->
<section class="booking">
        <script>
        function validateForm() {
            let x = document.forms["bookform"]["name"].value;
            let x1 = document.forms["bookform"]["email"].value;
            let x2 = document.forms["bookform"]["phone"].value;
            let x3 = document.forms["bookform"]["address"].value;
            let x4 = document.forms["bookform"]["location"].value;
            let x5 = document.forms["bookform"]["guests"].value;
            let x6 = document.forms["bookform"]["arrivals"].value;
            let x7 = document.forms["bookform"]["leaving"].value;

            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
            if (x1 == "") {
                alert("email must be filled out");
                return false;
            }
            if (x2 == "") {
                alert("phone must be filled out");
                return false;
            }
            if (x3 == "") {
                alert("address must be filled out");
                return false;
            }
            if (x4 == "") {
                alert("location must be filled out");
                return false;
            }
            if (x5 == "") {
                alert("guests must be filled out");
                return false;
            }
            if (x6 == "") {
                alert("arrivals must be filled out");
                return false;
            }
            if (x7 == "") {
                alert("leaving must be filled out");
                return false;
            }

        }
        </script>
<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form id="bookform" action="book_form.php" onsubmit="return validateForm()" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input  type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send" >

   </form>
   


</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +60-1163944323 </a>
         <a href="#"> <i class="fas fa-phone"></i> +60-1137975367 </a>
         <a href="#"> <i class="fas fa-envelope"></i> group3@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Johor, Malaysia - 100 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Goup-14</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->







<script>/* 
document.getElementById("bookform").addEventListener("submit", myFunction);

function myFunction() {
    alert("The booking was submitted successfully!");
}*/
</script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>