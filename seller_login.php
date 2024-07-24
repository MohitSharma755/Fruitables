<title>Seller Login</title>
<?php
session_start();
// include ("header.php");
// include ("config.php");
include("sellerchecklogin.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Jquery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Bootstrap css -->
<link rel="stylesheet" href="./Bootstarp css/bootstrap.css">

<!-- Custom css files -->
<link rel="stylesheet" href="./Custom css/custom.css">

<!--Owl Carousl link  -->
<link rel="stylesheet" href="./OwlCarousel2-2.3.4/src/scss/owl.carousel.scss">
<!-- Bootstrap js file -->
<script src="./Bootsrap js/bootstrap.js"></script>
    <!-- <script src="sellerlogin.js"></script> -->

</head>

<body>

    <div class="container col-5">
    <form action="" method="post">
        <h1 class="official-color text-center">Seller Login</h1>
        <label for="user">Seller Name:</label>
    
        <input type="number" id="user" class="form-control" name="sellername" placeholder="Enter your mobile number here..." required>
        <label for="pass">Password:</label>
        <input type="text" maxlength="10" id="pass" class="form-control" name="sellerpassword" required>
      
        <input type="submit" class=" btn btn-warning mt-3 text-center col-12 float-end"
        name="sell" id="sellerlogin" value="Seller Login">
        </form>
        <!-- <input type="submit" name="sellerloginbtn" id="sellerlogin" value="Login" class="btn btn-warning mt-3 text-center col-12"> -->
    

        <p class="">Not a Seller <a href="user_login.php" class="text-decoration-none"><span class="official-color" >Go to user Page</span></a>  </p>
        <p class="  float-end ">Not a User <a href="seller_registration.php" class="text-decoration-none">
                    <span class="official-color">SignUp</span></a>
            </p>
    </div>
<?php
if (isset($_POST['sell'])) {
    // echo "done";
    $mobile = $_POST['sellername'];
    $password = $_POST['sellerpassword'];
    $data = $conn->query("SELECT * FROM userdata WHERE `mobilese`='$mobile' AND `password`='$password'");
    if (mysqli_num_rows($data) > 0) {
        echo "welcome website";
        $result=mysqli_fetch_assoc($data);
        $loginType=$result['login_type'];
        $_SESSION['mobilenum'] = $mobile;
        $_SESSION['login_type'] =$loginType;
      
       
        if($loginType=='seller'){
            echo "<script>window.location.href='admin/admin.php'</script>";

        }
        else{
            echo "<script>window.location.href='index.php'</script>";

        }
     
       
    } else {
        echo "error";

    }
   


    
    
}

 
?>
</body>

</html>