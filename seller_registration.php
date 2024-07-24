<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration Form</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>


<?php
// include ("header.php");
include ("config.php");
?>



<body>
    <script src="seller.js"></script>
    <div class="container">
        <h1 class="text-center text-warning mt-2">Become a Seller*</h1>
        <div class="row  d-flex justify-content-center">
            <div class="col-xl-10 col-lg-7 col-sm-12">


                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">

                        <label for="name" class="h-color py-2 mb-2">First Name*</label>

                        <input type="text" name="fname" id="fname" class="rounded-3  py-1 form-control col-12">


                    </div>
                    <div class=" col-6  px-3">

                        <label for="lname" class="h-color py-2 mb-2">Last Name*</label>
                        <input type="text" name="lname" id="lname" class="rounded-3  py-1 form-control col-12">
                    </div>

                </div>

                <label for="cname" class="h-color py-2 mb-2">Company Name*</label>
                <input type="text" name="cname" id="cname" class="form-control">

                <label for="add" class="h-color py-2 mb-2">Address*</label>

                <input type="text" name="add" id="add" class="rounded-3  py-1 form-control col-12">

                <label for="town" class="h-color py-2 mb-2">Town/City*</label>
                <input type="text" name="town" id="town" class="form-control">
                <label for="zip" class="h-color py-2 mb-2">Postcode/Zip*</label>
                <input type="text" name="zip" id="zip" class="form-control">

                <label for="country" class="h-color py-2 mb-2">Country*</label>
                <input type="text" name=" country" id="country" class="rounded-3  py-1 form-control col-12">



                <label for="ph" class="h-color py-2 mb-2">Mobile*</label>
                <input type="text" name="ph" id="ph" class="rounded-3  py-1 form-control col-12">

                <label for="mail" class="h-color py-2 mb-2">Email Address*</label>
                <input type="text" name="mail" id="mail" class="rounded-3  py-1 form-control col-12">

                <label for="pass" class="h-color py-2 mb-2">Password*</label>
                <input type="password" name="mail" id="pass" class="rounded-3  py-1 form-control col-12">


                <!-- <label for="file">Profile Photo</label>
                <input type="file" name="photo" id="photo" class="form-control w-50"> -->

                <input type="submit" class=" px-4 col-5 border border-warning cart my-4 py-2 bg-none" name="placebtn"
                    id="seller" value="Become a Seller" onclick="change()">
            </div>
        </div>
    </div>

</body>

</html>