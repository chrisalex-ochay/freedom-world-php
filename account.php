<?php include('sendemailreg.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register/Login(account) - Freedom World Technolories & Accesories</title>
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
    
<!-- -----------------alert messages start ------------- -->
<?php echo $alert; ?>
    
<!-- -----------------alert messages end ------------- -->

<!-----------------------------   Login/Register items details  ---------------------->

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/images1.png" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="indicator">
                    </div>

                    <form id="loginForm">
                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <button type="text" class="btn" disabled="disabled">Login</button>
                        <a href="#" style="display: none;">Forgot password</a>
                    </form>

                    <form id="registerForm"> 
                        <input type="text" placeholder="Username">
                        <input type="email" placeholder="Email">
                        <input type="tel" placeholder="Telephone">
                        <input type="password" placeholder="Password">
                        <button type="text" class="btn" disabled="disabled">Register</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
 
<!-- --------------------- footer php link --------------------------- -->
<?php include('footer2.php'); ?>

<!---------------    jquery cdn link    --------------->
<script src="https:cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!---------------    owl carousel js file cdn link    --------------->
<script src="https:cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="main.js"></script>


<!------------------  js for toggle form  ----------------->
<script>

    var LoginForm = document.getElementById("loginForm");
    var RegisterForm = document.getElementById("registerForm");
    var Indicator = document.getElementById("indicator");

    function register(){
        RegisterForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    function login(){
        RegisterForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }

</script>

<script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</body>
</html>
