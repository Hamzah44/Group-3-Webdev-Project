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
   


   <style>
.services .box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.services .box-container .box {
    flex: 1 1 30rem;
    border-radius: .5rem;
    padding: 1rem;
    text-align: center;
}

.services .box-container .box i {
    padding: 1rem;
    font-size: 5rem;
    color: var(--orange);
}

.services .box-container .box h3 {
    font-size: 2.5rem;
    color: black;
}

.services .box-container .box p {
    font-size: 1.5rem;
    color: black;
    padding: 1rem 0;
}

.services .box-container .box:hover {
    box-shadow: 0 1rem 2rem burlywood;
    background-color: blueviolet;
}



.stars {
    color: orange;
    font-size: 2.5rem;
}

.price {
    font-size: 2.5rem;
    color: #333;
    padding-top: 1.7rem;
}

.price span {
    color: #666;
    font-size: 2.5rem;
    text-decoration: line-through;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

</head>
<body>
   
<!-- header section starts  -->

<section class="header " >



<a href="#" class="logo"><span>T</span>ravel <span>A</span>gency</a>

   <nav class="navbar">
      <a href="about.php" onclick=""> <img src="images/search.png"></a>

      <a href="home.php"><img src="images/Home.ico" alt="home" > </a>
      <a href="signup.php" ><img src="images/sign-up.png" alt="SignUp"></a>
     <a> <div class="dropdown" style="float:right;">
  <button class="dropbtn"><img  src="images/logout4.png"></button>
  <div class="dropdown-content">
  <a href="user.php?logout='1'" style="color: red;">logout</a>
    
    <a href="book.php">BOOKING</a>
   
  </div>
</div></a>

     

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1-.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel arround  Malaysia</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services" id="services">

<h1 class="heading-title"> our Services </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
    </div>
    <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>food and drinks</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    </div>
    <div class="box">
        <i class="fas fa-bullhorn"></i>
        <h3>safty guide</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
    </div>
    <div class="box">
        <i class="fas fa-globe-asia"></i>
        <h3>around the Malaysia</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    </div>
    <div class="box">
        <i class="fas fa-plane"></i>
        <h3>fastest travel</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    </div>
    <div class="box">
        <i class="fas fa-hiking"></i>
        <h3>adventures</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    </div>

</div>

</section>

<!-- services section ends -->
<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="https://i.pinimg.com/736x/72/0c/fb/720cfb63d89ca6684d3f0deaf8863e24.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>“Travel is the main thing you purchase that makes you more extravagant”. We, at ‘Travel Agency’,
           by this and put stock in satisfying travel dreams that make you perpetually rich constantly.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-kuala-lumpur.jpg" alt="">
         </div>
         <div class="content">
            <h3>Kuala Lumpur</h3>
            <p>Malaysia's capital and largest city has much to offer travelers.
                         Perhaps best known for the Petronas Twin Towers (the world's tallest twin towers),
                          KL is a very popular tourist destination and routinely makes the list of top 10
                           most visited cities in the world. A mix of colonial, modern, Asian, and Malay architecture 
                           flows through the city</p>
                           <div class="content">
                           <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR200.99 <span>MYR280.99</span> </div> </div>             
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-george-town.jpg" alt="">
         </div>
         <div class="content">
            <h3>George Town</h3>
            <p>The older part of Malaysia's second-largest city has been named a UNESCO World Heritage Site–but 
                        George Town is just as famous for its food as it is for its architecture. Known as "the food capital 
                        of Malaysia," George Town offers some of 
                        the best street food in Asia, best experienced in places like seafront Gurney Drive</p>
                       
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR90.00 <span>MYR120.00</span> </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-gunung-mulu-national-park.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gunung Mulu National Park</h3>
            <p>The park, named after Mount Mulu, attracts visitors from all over Asia who come here for trekking, caving,
                         hot springs, and the natural beauty that caused this place to receive a UNESCO World Heritage Site classification.
                       
                         Climbers can reach the top of Mount Mulu after a 24-kilometer trek with an elevation of 1,200 
                         meters</p>
                         <div class="content">
                         <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR70.00 <span>MYR100.99</span> </div>
                         </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt 
         maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      

      <div class="box">
         <h3>extra links</h3>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> ask questions</a>
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

   <div class="credit"> created by <span>Group-14-UTHM</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>