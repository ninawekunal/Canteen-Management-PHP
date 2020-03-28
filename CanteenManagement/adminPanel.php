
<?php 
    require_once 'adminheading.php';
    session_start();
    $con = mysqli_connect("localhost","root","","canteenm");
    if(isset($_GET["email"])){
        $email = $_GET["email"];
        $_SESSION["email"] = $email;
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
        #errorHidden{
            display: none;
            
        }
        #successHidden{
            display: none;
        }
    </style>

    <script type="text/javascript">
        function checkEmptyFile(){
            var x = document.getElementById("uploadImg").value;
            if(x==null||x==""){
                document.getElementById('errorHidden').style.display = 'inline-block';
                document.getElementById('errorHidden').innerHTML='<strong>Warning!</strong> Please select a file';
                $(window).scrollTop($('#errorHidden').offset().top);
            }
        }
        function edit(){

             if(document.getElementById("editButton").innerHTML=="Edit"){
                    document.getElementById('name').removeAttribute('disabled');
                    document.getElementById('org').removeAttribute('disabled');
                    document.getElementById('pos').removeAttribute('disabled');

                    document.getElementById("name").focus();

                    document.getElementById("editButton").innerHTML = "Save";
             }
             else if(document.getElementById("editButton").innerHTML=="Save"){
                    document.getElementById("name").disabled = true;
                    document.getElementById("org").disabled = true;
                    document.getElementById("pos").disabled = true;

                    document.getElementById("editButton").innerHTML = "Edit";

                    document.write('<?php saveData(); ?>');
             }

        }
    </script>
</head>

<body>
    <div></div>
    <div class="login-clean">
        <form method="post">
            <div id="errorHidden" class='alert alert-warning'>
                <strong>Warning!</strong> Error
            </div>
            <div id="successHidden" class="alert alert-success">
                <strong>Success!</strong> Indicates a successful or positive action.
            </div>
            <h2 class="sr-only">Login Form</h2><center><h6>Welcome Admin!</h6></center>
            <div class="illustration"><i class="icon ion-android-person" style="color:#000000;"></i></div>
            <div class="form-group"><input class="form-control" pattern="[A-Za-z]{50}" id="name" type="text" name="name" disabled="true" value="<?php if(isset($_SESSION['admin']['name'])){ echo $_SESSION['admin']['name'];} ?>" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" id="email" type="email" name="email" value="<?php echo $_SESSION['email']; ?>" disabled="true" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" id="org" type="text" name="org" disabled="true" placeholder="Organisation"></div>
            <div class="form-group"><input class="form-control" id="pos" type="text" name="pos" disabled="true" placeholder="Position"></div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" name="saveButton" id="editButton" onclick="edit()" type="button" style="background-color:#800080;">Edit</button><br>
                <div class="form-group">
                <h5>Change your photo:</h5><input type="file" id="uploadImg" name="uploadImg"><button onclick="checkEmptyFile()" class="btn btn-primary btn-block" type="button" style="background-color:#800080;">Change!</button></div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="button" style="background-color:#800080;">Remove my account!</button>
            </div>
        </form>
    </div>
    <br><br>
    
</body>

</html>

<?php 
    function saveData(){

        if(isset($_POST['saveButton'])){
            $name = $_POST['name'];
            $org = $_POST['org'];
            $pos = $_POST['pos'];

            $_SESSION['admin']['name'] = $name;
            $_SESSION['admin']['org'] = $org;
            $_SESSION['admin']['pos'] = $pos;
            
            //echo "$cur_email";
            
            
            $str = "update admin set name='$name',organisation='$org',position='$position'";
            $res = mysqli_query($con,$str);
            if($res){
                echo "<script>document.getElementById('successHidden').innerHTML='<strong>Success!</strong> Details updated successfully!';</script>";
            }
            else{
                echo "<script>document.getElementById('errorHidden').innerHTML='<strong>Warning!</strong> Error in updating details!';</script>";
            }
            
            
            
        }
    }
 ?>

<?php 
    require_once 'footer.php';
 ?>