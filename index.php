<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom World Technolories & Accesories</title>
    <link rel="stylesheet" href="style.css">

    <!-- Link for awesome fonts cdn -->
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- link for icon font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Link for starts ratings from fonts cdn -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/
    fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- owl carousel css file cdn link -->
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" type="text/css" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Bootstrap and J-query library links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<!-- ------------------------- php header link --------------------------  -->
    <?php include('header2.php'); ?>


<!----------------    home section starts    ---------------->
<section class="home" id="home">
    <div class="home-slider owl-carousel">
        <div class="item">
            <img src="images/hm-img1.jpg" alt="">
            <div class="content">
                <h3>Latest Gadgets</h3>
                <p>All available in both Retail and Wholesale, click Discover for more.</p>
                <a href="#latestID"><button class="btn">discover</button></a>
            </div>
        </div> 
         <div class="item">
            <img src="images/home3-work22.jpg" alt="">
            <div class="content">
                <h3>Quality Products</h3>
                <p>In need of New Laptops/Phones/Tablets.</p>
                <a href="#latestID"><button class="btn">discover</button></a>
            </div>
        </div>
       <!-- <div class="item">
            <img src="images/home-image3.jpg" alt="">
            <div class="content">
                <h3>Trending electronics</h3>
                <p>For all your desired and trending and high quality electronics</p>
                <a href="#featuredID"><button class="btn">discover</button></a>
            </div>
        </div>
        <div class="item">
            <img src="images/combine_images_2_-removebg-preview.png" alt="">
            <div class="content">
                <h3>High-class Accesories</h3>
                <p>Your Home of Accessories, Electronics, Computers and  are all in one Place</p>
                <a href="#latestID"><button class="btn">discover</button></a>
            </div>
        </div> 
        <div class="item">
            <img src="images/deal1-work1.jpg" alt="">
            <div class="content">
                <h3>Best Services</h3>
                <p>For all your I.T needs we have got you covered, check us out below</p>
                <a href="#dealID"><button class="btn">discover</button></a>
            </div>
        </div> -->

    </div>
</section>
<!-----------------    home section ends    ----------------->

<!-----------------------------        Featured Products       ---------------------->
    <div class="small-container" id="featuredID">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="productfiles/product-2-laptop-details.php"><img src="images/product-2-laptop1.png"></a>
                <a href="productfiles/product-2-laptop-details.php"><h4>Laptop</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$1000.00</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-4-flask-details.php"> <img src="images/product-4-flask2.5-stainless-1.png"></a>
                <a href="productfiles/product-4-flask-details.php"><h4>2.5 ltrs Stainless Flasks</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$18.00-$24.00</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-5-blender-details.php"><img src="images/product-5-blender-zaiba-1.png"></a>
                <a href="productfiles/product-5-blender-details.php"><h4>Zaiba Blenders</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            <p>$40.00-$50.00</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-6-minispeaker-details.php"><img src="images/product-6-bluetooth-speaker-oval1.png"></a>
            <a href="productfiles/product-6-minispeaker-details.php"><h4>Mini Bluetooth Speaker</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$18.00-$25.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        
        <div class="row" id="latestID">
            <div class="col-4">
                <a href="productfiles/product-10-cupflask1-details.php"><img src="images/product-10-1cupflask1.png"></a>
                <a href="productfiles/product-10-cupflask1-details.php"><h4>A 1 cup small blue flask</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$8.00-$10.00</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-14-mibox-details.php"><img src="images/product-14-Mi-Box1.png"></a>
                <a href="productfiles/product-14-mibox-details.php"><h4>Mi-Box - TV to Smart</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$90.00-$110.00</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-1-iphonex-details.php"><img src="images/product-1-phones-iphoneX-1.jpg"></a>
                <a href="productfiles/product-1-iphonex-details.php"><h4>iPhoneX</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$1000.00-$1500.00</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-16-headphonestm-details.php"><img src="images/product-16-headphones-tm1.png"></a>
                <a href="productfiles/product-16-headphonestm-details.php"><h4>Head-phones</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$8.00-$20.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="productfiles/product-12-percolator1-details.php"><img src="images/product-12-percolator-mylong1.png"></a>
                <a href="productfiles/product-12-percolator1-details.php"><h4>Percolator-MyLong</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$22.00-$30.00</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-18-chargerovs-details.php"><img src="images/product-18-multi-charer-ovs1.png"></a>
                <a href="productfiles/product-18-chargerovs-details.php"><h4>Multi-charger OVS</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$5.00-$10.00</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-20-screenguards-details.php"><img src="images/product-20-glass-screenguards1.png"></a>
                <a href="productfiles/product-20-screenguards-details.php"><h4>Glass Screen guards</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$5.00-$8.00</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-22-mug1-details.php"><img src="images/product-22-mug-traveling-cup1.png"></a>
                <a href="productfiles/product-22-mug1-details.php"><h4>Mug-Traveling Cup</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$8.00-$15.00</p>
            </div>
        </div>
    </div>

<!-----------------------   Others      -------------------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Freedom World Technologies</p>
                    <h1>Smart Band 4</h1>
                    <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3)
                           AMOLED color full-touch display with adjustable brightness, so everything 
                           is clear as it can be.
                    </small>
                    <a href="productfiles/product-37-smartwatch-details.php" class="btn">Buy Now &#8594; </a>
                </div>
            </div>
        </div>
    </div>

<!-- --------------------------- best deals services start-----------------  -->

<section class="deal" id="dealID">
    <h1 class="heading"><span> Best Services </span></h1>
    <div class="box-container">

        <div class="box">
            <img src="images/deal1-work1.jpg" alt="">
            <div class="content">
                <h3>Website Development</h3>
                <p>We provide webhosting, developemnt designing</p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal2-work1.jpg" alt="">
            <div class="content">
                <h3>Mobile App Development</h3>
                <p>We develop mobile Apps for Android & OS-platform</p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div>
        <div class="box">
            <img src="images/deal3-work1.jpg" alt="">
            <div class="content">
                <h3>Software Development</h3>
                <p>we create or maintain systems like ERPs </p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal2.jpg" alt="">
            <div class="content">
                <h3>Asycuda Installations</h3>
                <p>Software Installations, Linux & Windows 10 or others, Anti-viruses</p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div>
        <div class="box">
            <img src="images/deal1.jpg" alt="">
            <div class="content">
                <h3>ISP services</h3>
                <p>Internet Service Provider services </p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal5-timetable-software1.jpg" alt="">
            <div class="content">
                <h3>Timetable Automation</h3>
                <p>we deal in automation of tabletables for all institutions</p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div>
        <div class="box">
            <img src="images/deal7-work1.png" alt="">
            <div class="content">
                <h3>Computer Literacy Lessons</h3>
                <p>Computer fundamentals for all categories from children to adults </p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/images1.png" alt="">
            <div class="content">
                <h3>Internet Cafe Services</h3>
                <p>Need of high speed internet for live streaming and many more</p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div>
        <div class="box">
            <img src="images/deal1.jpg" alt="">
            <div class="content">
                <h3>Phone/Computer Repairing</h3>
                <p>we handle all types of repairing of phones and computers </p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal2.jpg" alt="">
            <div class="content">
                <h3>General I.T consultancy</h3>
                <p>we advice on how to go about the changing Technologies</p>
                <a href="#"><button class="btn" disabled>explore</button></a>
            </div>
        </div> 
    </div>

    <!-- --------------------------- best deals services end-----------------  -->

    
    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <h3>Fast Delivery</h3>
            <p>To you our precious clients, customers and partners we promise fast delivery of our 
                products and services to you in all best possible ways available</p>
        </div>
        <div class="icons">
            <i class="fas fa-user-clock"></i>
            <h3>24 x 7 support</h3>
            <p>Serving you is our number one priority, so we offer 24/7 support in our products & 
                service delivery, and we promise to be as more flexible as we can</p>
        </div>
        <div class="icons">
            <i class="fas fa-money-check-alt"></i>
            <h3>Easy Payments </h3>
            <p>Due to changing technology, all payment services like Bar-Code Payment, Mobile Money, 
                Bank and Crypto-Curency will be available soon</p>
        </div>
        
    </div>

</section>

<!------------------    deal section ends    ------------------>
    
<!----------------------    Brands   ---------------------->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-samsung.png" >
                </div>
                <div class="col-5">
                    <img src="images/logo-apple.png" >
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png" >
                </div>
                <div class="col-5">
                    <img src="images/logo-lenovo.png" >
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png" >
                </div>
                <div class="col-5">
                    <img src="images/Logo-OnePlus.png" >
                </div>
            </div>
        </div>
    </div>

<!----------------------    footer php link  ---------------------->
<?php include('footer2.php'); ?>

<!---------------    jquery cdn link    --------------->
<script src="https:cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!---------------    owl carousel js file cdn link    --------------->
<script src="https:cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="main.js"></script>

</body>
</html>
