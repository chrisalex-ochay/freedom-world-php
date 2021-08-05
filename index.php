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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap and J-query library links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<!-- ------------------------- php header link --------------------------  -->
    <?php include('header2.php'); ?>


<!----------------    home section starts    ---------------->
<section class="home-slider" id="home">

    <div class="slider">
        <div class="slide active">
            <img src="images/hm-img1.jpg" alt="">
            <div class="info-content">
                <h2>Latest Gadgets</h2>
                <p>All available in both Retail and Wholesale, click Discover for more.</p>
                <a href="#latestID"><button class="btn">discover</button></a>
            </div>
        </div> 
        <div class="slide">
            <img src="images/home3-work22.jpg" alt="">
            <div class="info-content">
                <h2>Quality Products</h2>
                <p>In need of New Laptops/Phones/Tablets.</p>
                <a href="#featuredID"><button class="btn">discover</button></a>
            </div>
        </div>
        <div class="slide">
            <img src="images/deal2-work1.jpg" alt="">
            <div class="info-content">
                <h2>Trending electronics</h2>
                <p>For all your desired and trending and high quality electronics</p>
                <a href="#featuredID"><button class="btn">discover</button></a>
            </div>
        </div>
        <div class="slide">
            <img src="home-slider4.jpg">
            <div class="info-content">
                <h2>High-class Accesories</h2>
                <p>Your Home of Accessories, Electronics, Computers and  are all in one Place</p>
                <a href="#latestID2"><button class="btn">discover</button></a>
            </div>
        </div> 
        <div class="slide">
            <img src="images/deal1-work1.jpg" alt="">
            <div class="info-content">
                <h2>Best Services</h2>
                <p>For all your I.T needs we have got you covered, check us out below</p>
                <a href="#dealID"><button class="btn">discover</button></a>
            </div>
        </div>
        <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
        </div>
        <div class="navigation-visibility">
            <div class="slide-icon active"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
        </div>
    </div>
</section>
<!-----------------    home section ends    ----------------->

<!-----------------------------        Featured Products       ---------------------->
    <div class="small-container" id="featuredID">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="productfiles/product-2-laptop-details.php"><img src="images/product-2-laptop1.png"></a>
                <a href="productfiles/product-2-laptop-details.php"><h4>New HP Laptop</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>2,900,000 Ushs</p>
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
                <p>75,000 Ushs</p>
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
            <p>135,000 Ushs</p>
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
            <p>60,000 Ushs</p>
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
                <p>25,000 Ushs</p>
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
                <p>350,000 Ushs</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-1-iphonex-details.php"><img src="images/product-1-phones-iphoneX-1.jpg"></a>
                <a href="productfiles/product-1-iphonex-details.php"><h4>New iPhone12</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>3,100,000 Ushs</p>
            </div>
            <div class="col-4">
                <a href="productfiles/product-16-headphonestm-details.php"><img src="images/product-16-headphones-tm1.png"></a>
                <a href="productfiles/product-16-headphonestm-details.php"><h4>TM-Head-phones</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>55,000 Ushs</p>
            </div>
        </div>
        <div class="row" id="latestID2">
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
                <p>70,000 Ushs</p>
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
                <p>14,000 Ushs</p>
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
                <p>10,000-25,000 Ushs</p>
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
                <p>24,000 Ushs</p>
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
            <img src="images/deal1-web-dev2.png" alt="">
            <div class="content">
                <h3>Website Development</h3>
                <p>We provide webhosting, developemnt designing</p>
                <a href="services.php#webdev"><button class="btn">explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal2-mobile-app-devt1.png" alt="">
            <div class="content">
                <h3>Mobile App Development</h3>
                <p>We develop mobile Apps for Android & OS-platform</p>
                <a href="services.php#mobappdev"><button class="btn">explore</button></a>
            </div>
        </div>
        <div class="box">
            <img src="images/deal3-work1.jpg" alt="">
            <div class="content">
                <h3>Software Development</h3>
                <p>we create or maintain systems like ERPs </p>
                <a href="services.php#softwaredev"><button class="btn">explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal4-install-softwares1.jpg" alt="">
            <div class="content">
                <h3>Software Installations</h3>
                <p>Asycuda Installations, Linux & Windows 10 or others, Anti-viruses</p>
                <a href="services.php#softwareInstall"><button class="btn">explore</button></a>
            </div>
        </div>
        <div class="box">
            <img src="images/deal5-ISP-Broadband1.jpg" alt="">
            <div class="content">
                <h3>ISP services</h3>
                <p>Internet Service Provider services </p>
                <a href="services.php#ispServices"><button class="btn">explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal6-GBN-Timetable-.png" alt="">
            <div class="content">
                <h3>Timetable Automation</h3>
                <p>we deal in automation of tabletables for all institutions</p>
                <a href="services.php#timetableAuto"><button class="btn">explore</button></a>
            </div>
        </div>
        <div class="box">
            <img src="images/deal7-work1.png" alt="">
            <div class="content">
                <h3>Computer Literacy Lessons</h3>
                <p>Computer fundamentals for all categories from children to adults </p>
                <a href="services.php#complessons"><button class="btn">explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal8-cafe-computers1.jpg" alt="">
            <div class="content">
                <h3>Internet Cafe Services</h3>
                <p>Need of high speed internet for live streaming and many more</p>
                <a href="services.php#internetCafe"><button class="btn">explore</button></a>
            </div>
        </div>
        <div class="box">
            <img src="images/deal9-computer-repairing2.jpg" alt="">
            <div class="content">
                <h3>Phone/Computer Repairing</h3>
                <p>we handle all types of repairing of phones and computers </p>
                <a href="services.php#phoneRepaing"><button class="btn">explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal10-ICT-consultancy1.png" alt="">
            <div class="content">
                <h3>General I.T consultancy</h3>
                <p>we advice on how to go about the changing Technologies</p>
                <a href="services.php#ictConsult"><button class="btn">explore</button></a>
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

<script type="text/javascript">
    const slider = document.querySelector(".slider");
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const slides = document.querySelectorAll(".slide");
    const slideIcons = document.querySelectorAll(".slide-icon");
    const numberOfSlides = slides.length;
    var slideNumber = 0;

    // image slider next button
    nextBtn.addEventListener("click", ()=> {
        slides.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active"); 
        });
        slideNumber++;

        if(slideNumber > (numberOfSlides - 1)){
            slideNumber = 0; 
        }
        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
    });

    // image slider previous button
    prevBtn.addEventListener("click", ()=> {
        slides.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active"); 
        });
        slideNumber--;

        if(slideNumber < 0){
            slideNumber = numberOfSlides - 1; 
        }
        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
    });

    //Image AutoPlay
    var playSlider;
    var repeater = () => {
        playSlider = setInterval(function(){
            slides.forEach((slide) => {
            slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active"); 
            });
            slideNumber++;

            if(slideNumber > (numberOfSlides - 1)){
                slideNumber = 0; 
            }
            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        }, 3500);
    }
    repeater();

    //stop the mouse autoplay on mouseover
    slider.addEventListener("mouseover", () => {
        clearInterval(playSlider);
    });

    //start the image slider autoplay again on mouseout
    slider.addEventListener("mouseout", () => {
        repeater();
    });

</script>

</body>
</html>
