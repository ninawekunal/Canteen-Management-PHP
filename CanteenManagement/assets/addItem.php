
<?php 
    require_once 'adminHeading.php';
    set_time_limit(0); // this will remove the time limit if any.

    $con=mysqli_connect("localhost","root","","canteenm");
    session_start();

    if(!isset($_SESSION['email'])){
        header("");
    }
 ?>

 <?php
if(isset($_POST["insertSub"])){
    
        $success = false;

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'canteenm';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        $name = $_POST["name"];
        $price = $_POST["price"];
        $desc = $_POST["desc"];
        $category = $_POST["category"];
        $itemid = $_POST["itemid"];
        $email = $_SESSION["email"];
        
        //Insert image content into database
        
            
if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}

$target_file = "uploads/compressed_" . $itemid.".jpg"; 
$uploadOk = 1;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["uploadImg"]["tmp_name"]);
    if($check !== false) {
        //file is an image
        $uploadOk = 1;
    } else {
         echo "<script>document.getElementById('errorHidden').innerHTML='<strong>Error!</strong> File is not an image';
                $(window).scrollTop($('#errorHidden').offset().top);</script>";       
         $uploadOk = 0;
    }
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
     echo "<script>document.getElementById('errorHidden').innerHTML='<strong>Error!</strong> Item add Fail';
                $(window).scrollTop($('#errorHidden').offset().top);</script>";
// if everything is ok, try to upload file
} else {
                  $source_file = $_FILES['uploadImg']['tmp_name'];
                   
                  $width      = 200;
                  $height     = 200;
                  $quality    = 1000;
                  //$image_name = $_FILES['uploadImg']['name'];
                  $success = compress_image($source_file, $target_file, $width, $height, $quality);
                    if($success){
                        $insert = $db->query("INSERT into menu(name,price,itemdesc,categories,createdBy,itemId) VALUES('$name',$price,'$desc','$category','$email','$itemid')");
                        if($insert){
                            echo "<script>alert('Item add successful');window.location='menu.php?additem=success';</script>";
                        }
                        else{
                            echo "<script>document.getElementById('errorHidden').innerHTML='<strong>Error!</strong> Error in adding item';
                $(window).scrollTop($('#errorHidden').offset().top);</script>";
                        }
                    }
                    else{
                        echo "<script>document.getElementById('errorHidden').innerHTML='<strong>Error!</strong> Item add fail';
                $(window).scrollTop($('#errorHidden').offset().top);</script>";
                    }
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

    <style type="text/css">
        #errorHidden{
            display: none;
        }
        #contentTable {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        input[type="checkbox"]{
            width: 20px;
            height: 20px;
        }
        tr {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="login-clean">
        <form method="POST" enctype="multipart/form-data">
             <div id="errorHidden" class='alert alert-warning'>
                <strong>Warning!</strong> Error
            </div>
            <h2 class="sr-only">Login Form</h2><a href="#" class="forgot">Add a new Item to the menu!</a>
            <div class="illustration"><i class="icon ion-plus-circled" style="color:#4b0082;"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Item Name"></div>
            <div class="form-group"><input class="form-control" type="number" name="price" placeholder="Item Price"></div>
            <div class="form-group"><input class="form-control" type="text" name="desc" placeholder="Item Description"></div>
            <div class="form-group"><input class="form-control" type="text" name="itemid" placeholder="Item Id"></div>
            <div class="form-group">
                <h5>Select the categories:</h5>
                <div class="form-check"><input value="Vegetarian" name="category" class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label"  for="formCheck-1">Vegetarian</label></div>
                <div class="form-check"><input value="Non-Veg" name="category" class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Non-Vegetarian</label></div>
                <div class="form-check"><input name="category" value="Snacks" class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Snacks</label></div>
                <div class="form-check"><input name="category" value="Breakfast" class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Breakfast</label></div>
                <div class="form-check"><input name="category" value="Lunch" class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Lunch</label></div>
                <div class="form-check"><input name="category" value="South-Indian" class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">South-Indian</label></div>
                <div class="form-check"><input name="category" value="North-Indian" class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">North-Indian</label></div>
                <div class="form-check"><input name="category" value="Chinese" class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">Chinese</label></div>
                <div class="form-check"><input name="category" value="Beverages" class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">Beverages</label></div>
            </div>
            <div class="form-group">
                <h5>Select a photo to upload:</h5><input id="uploadImg" name="uploadImg" type="file"></div>
            <div class="form-group"><button name="insertSub" class="btn btn-primary btn-block" type="submit" style="background-color:#4b0082;">Add this item!</button></div>
        </form>

        <?php
                          
                    

                    $result = mysqli_query($con,"SELECT * FROM menu");

                    echo "<div class='container'>
            <h1 class='text-center'>Menu</h1>
            <div class='table-responsive'>
                <table class='table' id='contentTable'>
                    <thead>
                        <tr>
                            <th class='justify-content-center align-items-center align-content-center'>Item</th>
                            <th class='justify-content-center align-items-center align-content-center'>Price</th>
                            <th class='justify-content-center align-items-center align-content-center'>Description</th>
                            <th class='justify-content-center align-items-center align-content-center'>Image</th>
                            <th>Added By</th>
                        </tr>
                    </thead>";
                    $destination = "uploads/";
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tbody><tr>";
                        
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['itemdesc'] . "</td>";
                        echo "<td><center>"; ?>
                            <img id="img" src='<?php echo $destination . "compressed_" . $row['itemId'].'.jpg' ?>'>
                        <?php echo "</center></td>";
                        echo "<td>".$row['createdBy']."</td>";
                        echo "</tr></tbody>";
                    }
                    echo "</table>
            </div>";

                    mysqli_close($con);
                ?>
        
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<?php
function compress_image($source_file, $target_file, $nwidth, $nheight, $quality) {
  //Return an array consisting of image type, height, widh and mime type.
  $image_info = getimagesize($source_file);
  if(!($nwidth > 0)) $nwidth = $image_info[0];
  if(!($nheight > 0)) $nheight = $image_info[1];
  
  if(!empty($image_info)) {
    switch($image_info['mime']) {
      case 'image/jpeg' :
        if($quality == '' || $quality < 0 || $quality > 100) $quality = 75; //Default quality
        // Create a new image from the file or the url.
        $image = imagecreatefromjpeg($source_file);
        $thumb = imagecreatetruecolor($nwidth, $nheight);
        //Resize the $thumb image
        imagecopyresized($thumb, $image, 0, 0, 0, 0, $nwidth, $nheight, $image_info[0], $image_info[1]);
        // Output image to the browser or file.
        return imagejpeg($thumb, $target_file, $quality); 
        
        break;
      
      case 'image/png' :
        if($quality == '' || $quality < 0 || $quality > 9) $quality = 6; //Default quality
        // Create a new image from the file or the url.
        $image = imagecreatefrompng($source_file);
        $thumb = imagecreatetruecolor($nwidth, $nheight);
        //Resize the $thumb image
        imagecopyresized($thumb, $image, 0, 0, 0, 0, $nwidth, $nheight, $image_info[0], $image_info[1]);
        // Output image to the browser or file.
        return imagepng($thumb, $target_file, $quality);
        break;
        
      case 'image/gif' :
        if($quality == '' || $quality < 0 || $quality > 100) $quality = 75; //Default quality
        // Create a new image from the file or the url.
        $image = imagecreatefromgif($source_file);
        $thumb = imagecreatetruecolor($nwidth, $nheight);
        //Resize the $thumb image
        imagecopyresized($thumb, $image, 0, 0, 0, 0, $nwidth, $nheight, $image_info[0], $image_info[1]);
        // Output image to the browser or file.
        return imagegif($thumb, $target_file, $quality); //$success = true;
        break;
        
      default:
        echo "<h4>Not supported file type!</h4>";
        break;
    }
  }
}
?>

<?php 
    require_once 'footer.php';
 ?>