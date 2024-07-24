<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <script src="user.js"></script>   
<!-- Jquery Cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>


<?php
include ("header.php");
include ("config.php");
?>


<!DOCTYPE html>
<html lang="en">



<body>

    <div class="container  ">
        <h1 class="text-warning text-center">Create An Account</h1>
        <div class="row  d-flex justify-content-center ">
            <div class="  col-xl-8">

                <!-- <form  class="mt-5" method="post"> -->
                <!-- <table class="mt-2"> -->
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">

                        <label for="name" class="h-color py-2 mb-2">First Name*</label>

                        <input type="text" name="fname" id="fname" class="rounded-3  py-1 form-control col-12">


                    </div>
                    <div class=" col-6 px-3">

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

                <label for="country" class="h-color py-2 mb-2">Country*</label>
                <input type="text" name=" country" id="country" class="rounded-3  py-1 form-control col-12">

                <label for="zip" class="h-color py-2 mb-2">Postcode/Zip*</label>
                <input type="text" name="zip" id="zip" class="form-control">

                <label for="ph" class="h-color py-2 mb-2">Mobile*</label>
                <input type="text" name="ph" id="ph" class="rounded-3  py-1 form-control col-12">

                <label for="mail" class="h-color py-2 mb-2">Email Address*</label>
                <input type="text" name="mail" id="mail" class="rounded-3  py-1 form-control col-12">




                <label for="file">Profile Photo</label>
                <input type="file" name="photo" id="photo" class="form-control w-50">

                <input type="submit"
                                    class=" px-4  rounded-5  py-3 mt-3 border border-warning cart float-end"
                                    name="placebtn" id="userbtn" value="Place Order">
                <button type="submit" method="post" class=" border border-warning rounded  addtocart col-5  my-4 px-4 py-3"
                    name="placebtn" id="userbtn" value="Place ">Create Account
                </button>
                <!-- </form> -->



             
            </div>










        </div>
    </div>

    <!-- <div class="container">
    <form action="" class="" method="post">
        <table class=" d-flex  justify-content-center align-items-center ht-100 ">
            <h1 class="text-center text-warning mt-2">Join Us for fresh <span class="text-danger">Vegetables</span> !</h1>


           
                <tr class=" bg-secondary">
                    <td class="px-2"><label for="name">Name:</label></td>
                    <td class="py-2 px-2"><input type="text" class="form-control" name="" id="name"
                            placeholder="Enter your name"></td>

                </tr>
                <tr class="bg-secondary">
                    <td class="px-2"><label for="email">Email:</label></td>
                    <td class="py-2 px-2"><input type="text" class="form-control" name="" id="email"
                            placeholder="Enter your Email"></td>

                </tr>
                <tr class="bg-secondary">
                    <td class="px-2"><label for="phone">Phone:</label></td>
                    <td class="py-2 px-2"><input type="number" class="form-control" name="" id="phone"
                            placeholder="Enter your Phone Number"></td>

                </tr>
                <tr class="bg-secondary">
                    <td class="px-2"><label for="address">Address:</label></td>
                    <td class="py-2 px-2"><input type="text" class="form-control" name="" id="address"
                            placeholder="Enter your Address"></td>

                </tr>
                <tr class="bg-secondary">
                    <td class="px-2"><label for="pass">Password:</label></td>
                    <td class="py-2 px-2"><input type="password" class="form-control" name="" id="pass"
                            placeholder="Enter your Password"></td>

                </tr>
                <tr class="bg-secondary">
                    <td class="px-2"><label for="file">Choose your File:</label></td>
                    <td class="py-2 px-2"><input type="file" class="form-control" name="" id="file"></td>

                </tr>
                <tr class="bg-secondary">
                    <td class="px-2"><label for="address"></label></td>
                    <td class="py-2 px-2">
                        <button class="btn submit border-success" type="post">Submit</button>
                    </td>

                </tr>

          
        </table>
    </form>
    </div> -->


</body>

</html>