<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashes - Freedom World Technolories & Accesories</title>
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
                <img src="../images/product-40-Flashes-1-1.jpg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="../images/product-40-Flashes-1-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/product-40-Flashes-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/product-40-Flashes2-1-1.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Flash Disks</p>
                <h1>Original Flashes</h1>
                <h4>$5.00-$45.00</h4>
                <select>
                    <option>Select Color</option>
                    <option>Blue</option>
                    <option>Black</option>
                    <option>Green</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>We have all types of Flash Disks namely, Sony, Sandisk, Toshiba, and many more <br>
                   some of the flashes are plastics, others are metal <br>
                    we only sell original long lasting and durable Flashes <br>
                    We have from 1gb, 2gb, 4gb, 8gb, 16gb, 32gb, 64gb and 128gb capacity cards<br>
                    all our cards are at a good price.
                 </p>
            </div>
        </div>
    </div>

    <!-- -------------- title --------------  -->

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="../products-page3.php"><p>View More</p></a>
        </div>
    </div>

    <!-- ------------------ products ---------------  -->
    <div class="small-container">        
        <div class="row">
            <div class="col-4">
                <a href="../productfiles/product-39-memorycards-details.php"><img src="../images/product-39-memorycard-1.jpg"></a>
                <a href="../productfiles/product-39-memorycards-details.php"><h4>Memory Cards</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$5.00-$45.00</p>
            </div>
            <div class="col-4">
                <a href="../productfiles/product-41-otg-adapter-details.php"><img src="../images/product-41-OTG-adapter-1.jpg"></a>
                <a href="../productfiles/product-41-otg-adapter-details.php"><h4>OTG-connector</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$5.00-$50.00</p>
            </div>
            <div class="col-4">
                <a href="../productfiles/product-1-iphonex-details.php"><img src="../images/product-1-phones-iphoneX-1.jpg"></a>
                <a href="../productfiles/product-1-iphonex-details.php"><h4>iPhone12</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$850.00</p>
            </div>
            <div class="col-4">
                <a href="../productfiles/product-2-laptop-details.php"><img src="../images/product-2-laptop1.png"></a>
                <a href="../productfiles/product-1-iphonex-details.php"><h4>Laptop</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$200.00 - $1000.00</p>
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