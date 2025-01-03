<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
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
    </style>

</head>

<body>

    <!-- header section starts  -->

    <section class="header">

    <a href="home.php" class="logo"><span>T</span>ravel <span>A</span>gency</a>

        <nav class="navbar">
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="user.php"><img src="images/user.png" alt="User.png"></a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->

    <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
        <h1>packages</h1>
    </div>

    <!-- packages section starts  -->

    <section class="packages">

        <h1 class="heading-title">top destinations</h1>

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
                           
                           <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR180.00 <span>  MYR240.00</span> </div> 
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
                    <div class="price"> MYR150.99 <span>MYR220.99</span> </div> 
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-gunung-mulu-national-park.jpg" alt="">
                </div>
                <div class="content">
                    <h3> Gunung Mulu National Park</h3>
                    <p>The park, named after Mount Mulu, attracts visitors from all over Asia who come here for trekking, caving,
                         hot springs, and the natural beauty that caused this place to receive a UNESCO World Heritage Site classification.
                        Climbers can reach the top of Mount Mulu after a 24-kilometer trek with 
                        an elevation of 1,200 meters</p>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR80.00 <span>MYR110.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-kuantan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kuantan</h3>
                    <p>Kuantan's main call to fame is its beaches. Teluk Cempedak Beach is just minutes from the city
                         center and offers 
                        a tree-lined, clean shoreline, while nearby Cherating Beach is home to a turtle sanctuary,
                         as well as a cultural village that produces and sells traditional batik.</p>
                         <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR180.00 <span>MYR240.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-perhentian-islands.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Perhentian Islands</h3>
                    <p>These coral-fringed, secluded islands offer plenty of opportunities for kayaking, exploring, 
                        snorkeling, and scuba 
                        diving (including the popular site of a sugar hauler wreck), as well as a chance to volunteer
                         with local organizations in green and hawksbill turtle conservation efforts.</p>
                         <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR140.00 <span>MYR190.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-langkawi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Langkawi</h3>
                    <p>A group of 99 islands off the northwestern coast of Malaysia, Langkawi is home to three protected Geoforest parks 
                        and many coconut tree-lined shores that are among the best beaches in Malaysia. very popular with tourists, while beaches on the smaller northeastern 
                        islands </p>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR180.00 <span>MYR240.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-cameron-highlands.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cameron Highlands</h3>
                    <p>The Cameron Highlands is a hilly region with a long tradition of tea growing on the sloping mountainside. 
                        The tea plantations are still a major attraction today and one of the most photographed spots, but the Cameron 
                        Highlands
                     are also home to lavender and strawberry farms; orchards; herbal gardens and nurseries; </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR70.00 <span>MYR120.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-taman-negara.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Taman Negara</h3>
                    <p>A protected area inhabited by a 130-million-year-old deciduous rainforest, Taman Negara offers activities and 
                        attractions to last for days. In addition to jungle trekking and bird-watching, visitors come here to 
                        climb Mount Tahan (considered one of the hardest hikes/climbs in Malaysia),
                         try the canopy walkway, or jump on the Lata Berkoh river rapids.</p>
                         <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR180.00 <span>MYR240.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-kota-kinabalu.jpg" alt="">
                </div>
                <div class="content">
                    <h3> Kota Kinabalu</h3>
                    <p>Located against the South China Sea, the capital city of Kota Kinabalu or KK occupies the northern section 
                        of Borneo and is surrounded by virgin forest and large mountain ranges. Nearby Mount Kinabalu 
                        (from where the city gets its name), is Malaysia's highest mountain
                         and a highly regarded climbing destination</p>
                         <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR180.00 <span>MYR240.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2019/10/malaysia-best-places-to-visit-ipoh.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ipoh</h3>
                    <p>The third-largest city in Malaysia is famous for its colonial-era architecture, traditional cuisine 
                        (which combines influences of Chinese, Indian, and Malay food), and beautiful unspoiled nature. 
                        Ipoh's Old Town is near the Kinta River, and it's a great place to see Chinese shophouses and the narrow
                         "Concubine Lane," a chic area full of restaurants, pop-up stalls, and gift shops.</p>
                         <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR180.00 <span>MYR240.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2021/08/malaysia-best-places-to-visit-malacca-city.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Malacca City</h3>
                    <p>Malacca City has been an important port town since the 15th century, though today it's best known 
                        for its colorful heritage buildings and fun cultural attractions. This quaint city is best explored on 
                        foot, so you can truly 
                        appreciate the eclectic mix of colonial and Peranakan architecture all around.</p>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR180.00 <span>MYR240.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.planetware.com/wpimages/2021/08/malaysia-best-places-to-visit-tioman-island.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tioman Island</h3>
                    <p>Tioman is the default destination for those looking for a simpler, rougher beach life – a place where beaches 
                        remain underdeveloped, there are few roads, and you're likely to share the sand with
                        the occasional macaque or other wildlife as you walk around the island.</p>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> MYR180.00 <span>MYR240.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><span class="btn">load more</span></div>

    </section>

    <!-- packages section ends -->
















    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            

            <div class="box">
                <h3>extra links</h3>
                <a href="about.php"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +60-123456789 </a>
                <a href="#"> <i class="fas fa-phone"></i> +60-123456789 </a>
                <a href="#"> <i class="fas fa-envelope"></i> group14@gmail.com </a>
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