<?php 
    require_once 'heading.php';
 ?>
<?php 
    $flag = 0;
    $con = mysqli_connect("localhost","root","","canteenM");
    if(isset($_POST["loginB"]))
    {
        $email = strtolower($_POST["email"]);
        $password = $_POST["password"];

        $str = "select * from admin";
        $result = mysqli_query($con,$str);
        $found = mysqli_num_rows($result);
        if($found>0)
        {
            while($row=mysqli_fetch_array($result)){
                if($row["email"]==$email &&$row["password"]==$password){
                    $flag=1;
                    header("Location:AdminPanel.php?email=".$row["email"]);
                    break;
                }
                else
                {
                    $flag=0;
                }
            }
        }
        else{
             $flag=0;
             
        }
        
    }

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
    <br><br>

    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <?php 
                if(isset($_POST['loginB'])){
                
                    if($flag==0){
                    echo "<div class='alert alert-warning' id='error'>
                    <strong>Warning!</strong> Incorrect credentials
                    </div>";
                }
                }
             ?>
            
            <div class="illustration"><a href="adminlogin.php" class="forgot">Admin Login</a><i class="icon ion-ios-navigate" style="color:#4b0082;"></i>
            
            </div>
            <div class="form-group"><input class="form-control" type="email" name="email" required placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" required placeholder="Password"></div>
            <div class="form-group"><button name="loginB" class="btn btn-primary btn-block" type="submit" style="background-color:#4b0082;">Log In</button></div>
        </form>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<?php 
    require_once 'footer.php';
 ?>