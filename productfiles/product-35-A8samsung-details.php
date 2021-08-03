<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A8samsung - Freedom World Technolories & Accesories</title>
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
                <img src="../images/product-35-Used-phone-A8-samsung-1-1.jpg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="../images/product-35-Used-phone-A8-samsung-1-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/product-35-Used-phone-A8-samsung-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/product-35-Used-phone-A8-samsung-3.jpg" width="100%" class="small-img">
                    </div>                    
                </div>
            </div>
            <div class="col-2">
                <p>A8 samsung Galaxy</p>
                <h1>Samsung Galaxy A8 </h1>
                <h4>$212.00 - $240.00</h4>
                <select>
                    <option>Select Color</option>
                    <option>Black</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>it's a 4G networt based smartphone,<br>
                   Dual or Single nano simcard  <br>
                   it has a very good camera for both front and back  <br>
                   with a very good battery, it come in different colors like Gold, black etc
                </p>
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
                <a href="../productfiles/product-13-A21samsung-details.php"><img src="../images/product-13-samsungA21s1.png"></a>
                <a href="../productfiles/product-13-A21samsung-details.php"><h4>Samsung Phones- A21s</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$215.00-$270.00</p>
            </div>
            <div class="col-4">
                <a href="../productfiles/product-34-newmifi-details.php"><img src="../images/product-34-New-4G-unlocked-mifi-1.jpg"></a>
                <a href="../productfiles/product-34-newmifi-details.php"><h4>New Unlocked 4G Mifis</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$40.00-$70.00</p>
            </div>
            <div class="col-4">
                <a href="../productfiles/product-31-simtablets-details.php"><img src="../images/product-31-simcard-enabled-tablets1.png"></a>
                <a href="../productfiles/product-31-simtablets-details.php"><h4>Simcard Tablet</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$60.00-$230.00</p>
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