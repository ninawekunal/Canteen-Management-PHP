<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testingCanteen</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top d-inline-block navigation-clean-button" style="background-color:#800080;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color:#ffffff;"><img class="d-inline-block" src="assets/img/fork.jpg">Your Canteen!</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Order Now</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Menu</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Contact Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Careers</a></li>
                </ul><span class="navbar-text actions"> <a href="login.php" class="login" style="color:rgb(0,0,0);">Log In</a><a class="btn btn-light action-button" role="button" href="signup.php">Sign Up</a></span></div>
        </div>
    </nav><br><br>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate" style="color:#8a2be2;"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:#8a2be2;">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a><a href="adminLogin.php" class="forgot">Admin Login?</a></form>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<?php 
    require_once 'footer.php';
 ?>