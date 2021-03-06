<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam-Flatiron1 - Freedom World Technolories & Accesories</title>
    <link rel="stylesheet" href="../style.css">

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

        <!-- Bootstrap and J-query library links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
     
<!-- ------------------------- php header link --------------------------  -->
 <?php include('../header.php'); ?>
    

<!-----------------------------   single product details  ---------------------->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="../images/product-15-steaming-flat-irons1-11.png" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="../images/product-15-steaming-flat-irons1-11.png" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/product-15-steaming-flat-irons1-21.png" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Steamer Flatiron</p>
                <h1>A Phillips Steam-Flatiron</h1>
                <h4>85,000 Ushs</h4>
                <select>
                    <option>Select Color</option>
                    <option>Blue-White</option>
                    <option>Black-white</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <ul>
                    <li>it is an electric steam flatiron with self clean functions </li>
                    <li>very strong, durable, long lasting and a ceramic soleplate </li>
                    <li>with Anti-drip 360 ml water tank capacity, </li>
                    <li>it is adjustable and it comes with an over heating protection feature </li>
                    <li>to save you from accidental electrical fires</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- -------------- title --------------  -->

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="../products-page2.php"><p>View More</p></a>
        </div>
    </div>

    <!-- ------------------ products ---------------  -->
    <div class="small-container">        
        <div class="row">
            <div class="col-4">
                <a href="../productfiles/product-11-flatiron1-details.php"><img src="../images/product-11-flatiron1.png"></a>
                <a href="../productfiles/product-11-flatiron1-details.php"><h4>phillips FlatIrons</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>75,000 Ushs</p>
            </div>
            <div class="col-4">
                <a href="../productfiles/product-17-percolator2golden-details.php"><img src="../images/product-17-percolator-golden1.png"></a>
                <a href="../productfiles/product-17-percolator2golden-details.php"><h4>Golden Percolators</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>40,000 Ushs</p>
            </div>
            <div class="col-4">
                <a href="../productfiles/product-29-extensions1-details.php"><img src="../images/product-29-extensions-1.png"></a>
                <a href="../productfiles/product-29-extensions1-details.php"><h4>Villaon Extensions</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>28,000 Ushs</p>
            </div>
            <div class="col-4">
                <a href="../productfiles/product-38-headphonesony-details.php"><img src="../images/product-38-headphonesony-1.jpg"></a>
                <a href="../productfiles/product-38-headphonesony-details.php"><h4>Sony Extra Bass headphones</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>50,000 Ushs</p>
            </div>
        </div>

    </div>

<!-- --------------------- footer php link --------------------------- -->
<?php include('../footer.php'); ?>

<!-- --------------- js for single product detail/product gallery-------------- -->

    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function(){
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function(){
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function(){
            ProductImg.src = SmallImg[3].src;
        }
    </script>
</body>
</html>
