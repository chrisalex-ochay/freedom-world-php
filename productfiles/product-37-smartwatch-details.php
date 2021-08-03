<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartWatch1 - Freedom World Technolories & Accesories</title>
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
                <img src="../images/product-37-smartwatch1-2.png" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="../images/product-37-smartwatch1-2.png" width="100%" class="small-img">
                    </div>
                    
                </div>
            </div>
            <div class="col-2">
                <p>Smart Watch</p>
                <h1>Portable SmartWatch</h1>
                <h4>$50.00-$350.00</h4>
                <select>
                    <option>Select Color</option>
                    <option>Orange</option>
                    <option>Red</option>
                    <option>Black</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>a smart watch is a smart phone like device worn on the arm wrist<br>
                   it can be connected to a smartphone or not <br>
                   when connected to a smart phone it notifies the user of the incoming calls,<br>
                   e-mail messages and notifications from applications.<br>
                   but a simcard enabled smart watch can make calls on its own.
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
                <a href="../productfiles/product-35-A8samsung-details.php"><img src="../images/product-35-Used-phone-A8-samsung-1.jpg"></a>
                <a href="../productfiles/product-35-A8samsung-details.php"><h4>Samsung Galaxy A8 </h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$600.00-$1000.00</p>
            </div>
            <div class="col-4">
                <a href="../productfiles/product-4-flask-details.php"> <img src="../images/product-4-flask2.5-stainless-1.png"></a>
                <a href="../productfiles/product-4-flask-details.php"><h4>2.5 ltrs Stainless Flasks</h4></a>
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
                <a href="../productfiles/product-6-minispeaker-details.php"><img src="../images/product-6-bluetooth-speaker-oval1.png"></a>
                <a href="../productfiles/product-6-minispeaker-details.php"><h4>Mini Bluetooth Speaker</h4></a>
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
        SmallImg[4].onclick = function(){
            ProductImg.src = SmallImg[4].src;
        }
        SmallImg[5].onclick = function(){
            ProductImg.src = SmallImg[5].src;
        }
        SmallImg[6].onclick = function(){
            ProductImg.src = SmallImg[6].src;
        }

    </script>
</body>
</html>