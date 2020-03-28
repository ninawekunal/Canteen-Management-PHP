<?php 
    require_once 'heading.php';
 ?>
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
    <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-image:url(&quot;assets/img/c2.jpg&quot;);">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/c1.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/c2.jpg" alt="Slide Image" style="background-image:url(&quot;assets/img/c5.jpg&quot;);"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/c3.jpg" alt="Slide Image" style="background-image:url(&quot;assets/img/c4.jpg&quot;);"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/c4.jpg" alt="Slide Image" style="background-image:url(&quot;assets/img/c2.jpg&quot;);"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/c5.jpg" alt="Slide Image" style="background-image:url(&quot;assets/img/c3.jpg&quot;);"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
            <li data-target="#carousel-1" data-slide-to="4"></li>
            </ol>
    </div>
    <div></div>
    <h1 class="text-center align-content-center align-self-center" style="color:#505e6c;font-size:48px;">Menu</h1>
    <hr>
    <div class="btn-toolbar justify-content-center">
        <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background-color:#800080;">All&nbsp;</button><button class="btn btn-primary" type="button" style="background-color:#800080;">Snacks</button><button class="btn btn-primary" type="button" style="background-color:#800080;">Breakfast</button>
            <button
                class="btn btn-primary" type="button" style="background-color:#800080;">Lunch</button><button class="btn btn-primary" type="button" style="background-color:#800080;">Vegetarian</button><button class="btn btn-primary" type="button" style="background-color:#800080;">Non - Veg</button></div>
        <div class="btn-group"
            role="group"><button class="btn btn-primary" type="button" style="background-color:#800080;">South Indian</button><button class="btn btn-primary" type="button" style="background-color:#800080;">North Indian</button><button class="btn btn-primary" type="button"
                style="background-color:#800080;">Chinese</button><button class="btn btn-primary" type="button" style="background-color:#800080;">Beverages</button><button class="btn btn-primary" type="button" style="background-color:#800080;">Today's Special</button></div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="justify-content-center align-items-center align-content-center">
                    <th class="justify-content-center align-items-center align-content-center align-self-center">Item</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Check</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
                <tr></tr>
            </tbody>
        </table>
    </div>
    <div class="contact-clean" style="background-color:#ffffff;">
        <form method="post">
            <h2 class="text-center" style="color:#505e6c;">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color:#800080;">send </button></div>
        </form>
    </div>
    <div class="features-boxed" style="background-color:#dcdcdc;">
        <div class="container" style="background-color:#dcdcdc;">
            <div class="intro">
                <h2 class="text-center">Careers</h2>
                <p class="text-center">Check out the current job openings here!</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Job Title 1</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Job Title 2</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Job Title 3</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Job Title 4</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Job Title 5</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Job Title 6</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<?php 
    require_once 'footer.php';
 ?>