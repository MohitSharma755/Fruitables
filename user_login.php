<?php
session_start();

// include ("header.php");
include ("checklogin.php");
// include('config.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
      <!-- Bootstrap css -->
  <link rel="stylesheet" href="./Bootstarp css/bootstrap.css">

<!-- Custom css files -->
<link rel="stylesheet" href="./Custom css/custom.css">

  <!--Owl Carousl link  -->
  <!-- <link rel="stylesheet" href="./OwlCarousel2-2.3.4/src/scss/owl.carousel.scss"> -->

<!-- Bootstrap js file -->
<script src="./Bootsrap js/bootstrap.js"></script>


<!-- Custom JS -->
<script src="Customjs/index.js"></script>
<!-- <script src="test.js"></script> -->



<!-- Jquery Cdn -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 
</head>

<body>

    <div class="container col-5">
        <h1 class="official-color text-center">User Login</h1>
        <form action="" method="post">
            <label for="user">User Name:</label>
            <input type="number" id="user" class="form-control" name="username">
            <label for="pass">Password:</label>
            <input type="text" id="pass" class="form-control" name="password">

            <input type="submit" class=" btn btn-warning mt-3 text-center col-12 float-end" name="loginbtn"
                id="loginbtn" value="User Login">

            
            <p class="mt-4  float-start">Not a User
                <a href="user_registration.php" class="text-decoration-none">
                    <span class="official-color">SignUp</span></a>
            </p>

            <p class=" mt-4 float-end ">Forget password
                <a href="sellerpassupdate.php" class="text-decoration-none"><span class="official-color">Reset Password
                        from here</span></a>
            </p>
        </form>
    </div>
   
</body>

</html>