<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhoneX - Freedom World Technolories & Accesories</title>
    <link rel="stylesheet" href="../style.css">

    <!-- Link for awesome fonts cdn -->
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Link for starts ratings from fonts cdn -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/
    fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
   
<!-- ------------------------- php header link --------------------------  -->
<?php include('../header.php'); ?>
    

<!-----------------------------   single product details  ---------------------->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="../images/product-13-samsungA21s1-1.png" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="../images/product-13-samsungA21s1-1.png" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/product-13-samsungA21s2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/product-13-samsungA21s3.png" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/product-13-samsungA21s4.png" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Sumsang Galaxy A21s</p>
                <h1>Sumsang Galaxy A21s</h1>
                <h4>$215.00-$270.00</h4>
                <select>
                    <option>Select Color</option>
                    <option>Blue</option>
                    <option>Black</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p> its a 4G-LTE/HSPA/GSM netowrk<br>
                    it is a sumsang galaxy a21s Android 9 or 10,  <br>
                   its size is 6.5 inches screen with a battery of 5000mAh <br> 
                   its a single sim nano-sim card <br>
                with and internal memory of 64gbs and 4gbs of ram with a camera of quad 48mp
                </p>
            </div>
        </div>
    </div>

    <!-- -------------- title --------------  -->

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="../products-page1.php"><p>View More</p></a>
        </div>
    </div>

    <!-- ------------------ products ---------------  -->
    <div class="small-container">        
        <div class="row">
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
        </div>

    </div>

<!-- --------------------- footer php link --------------------------- -->
<?php include('../footer.php'); ?>


<!------------------  js for toggle menu  ----------------->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight = "200px";
            }else{
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

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