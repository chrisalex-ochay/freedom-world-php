<!DOCTYPE html>
<html lang="en">
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cart - Freedom World Technolories & Accesories</title>
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
        
             <!-- Bootstrap and J-query library links -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
    <body>
          
       
<!-- ------------------------- php header link --------------------------  -->
<?php include('header2.php'); ?>
    

<!-----------------------------   cart items details  ---------------------->

<div class="small-container cart-page">

    <table class="table1">
        <tr>
            <th class="th1">Products</th>
            <th class="th1">Quantity</th>
            <th class="th1">Subtotal</th>
        </tr>
        <tr>
            <td class="td1">
                <div class="cart-info">
                    <img src="images/product-2-laptop1-1.png" >
                    <div>
                        <p>Laptop Brand New</p>
                        <small>Price: $1000.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td class="td1"><input type="number" value="1"></td>
            <td class="td1">$1000.00</td>
        </tr>
        <tr>
            <td class="td1">
                <div class="cart-info">
                    <img src="images/product-10-1cupflask2.png" >
                    <div>
                        <p>Dark Blue 1 cup flask</p>
                        <small>Price: $8.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td class="td1"><input type="number" value="1"></td>
            <td class="td1">$8.00</td>
        </tr>
        <tr>
            <td class="td1">
                <div class="cart-info">
                    <img src="images/product-1-phones-iphoneX-1-1.jpg" >
                    <div>
                        <p>iPhone 12</p>
                        <small>Price: $850.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td class="td1"><input type="number" value="1"></td>
            <td class="td1">$850.00</td>
        </tr>
    </table>

    <div class="total-price">

        <table>
            <tr>
                <td class="td1">Subtotal</td>
                <td class="td1">$1858.00</td>
            </tr>
            <tr>
                <td class="td1">tax</td>
                <td class="td1">$382.00</td>
            </tr>
            <tr>
                <td class="td1">Total</td>
                <td class="td1">$2240.00</td>
            </tr>
        </table>

    </div>

</div>

<!-- --------------------- footer php link --------------------------- -->
<?php include('footer2.php'); ?>


<!---------------    jquery cdn link    --------------->
<script src="https:cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!---------------    owl carousel js file cdn link    --------------->
<script src="https:cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="main.js"></script>


</body>
</html>
