<?php include('sendemail.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Freedom World Technolories & Accesories</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap and J-query library links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<!-- ------------------------- php header link --------------------------  -->
    <?php include('header2.php'); ?>


    <!-- -----------------alert messages start ------------- -->
    <?php echo $alert; ?>
    
    <!-- -----------------alert messages end ------------- -->
<!----------------------------   Contact Us starts    ------------------------->
<div class="contactus">
    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i>Nakawa,Kampala,Uganda</div>
            <div><i class="fas fa-envelope"></i>freedomworldtech@gmail.com</div>
            <div><i class="fas fa-phone"></i>+256703200934</div>
            <div><i class="fas fa-clock"></i>Mon - Sat 8:00AM - 5:00PM </div>
            <div class="social">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-tiktok"></i></a>
                </div>            
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message + Your Phone Number" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Send">
            </form>
        </div>      
    </div>    
</div>
<!----------------------------   Contact Us ends    ------------------------->
<script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>



<!----------------------    footer php link  ---------------------->
<?php include('footer2.php'); ?>

<!---------------    jquery cdn link    --------------->
<script src="https:cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!---------------    owl carousel js file cdn link    --------------->
<script src="https:cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



</body>
</html>
