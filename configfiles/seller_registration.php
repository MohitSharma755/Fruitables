<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration Form</title>
    <script src="seller.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>


<?php
include ("header.php");
include ("config.php");
?>



<body>

    <div class="container">
        <h1 class="text-center text-warning mt-2">Become a Seller</h1>
        <div class="row  d-flex justify-content-center">
            <div class="col-xl-10 col-lg-7 col-sm-12">

                <form  class="mt-5" method="post">
                <!-- <table class="mt-2"> -->
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


                

                <label for="file">Profile Photo</label>
                <input type="file" name="photo" id="photo" class="form-control w-50">

                <input type="submit" class=" px-4  border border-warning cart float-end"
                                    name="placebtn" id="seller" value="Place Order">
                <button type="SUBMIT" class="btn border border-warning rounded  addtocart col-5  my-4 px-4 py-3"
                    name="placebtn" id="seller" value="Place ">Create Account
                </button>
                </form>



                <?php
include ("config.php");
$first = $_POST['fname'];
$last = $_POST['lname'];
$company = $_POST['cname'];
$address = $_POST['add'];
$town = $_POST['town'];
$postcode = $_POST['zip'];
$country = $_POST['country'];
$mobile = $_POST['ph'];
$email = $_POST['mail'];
$imagename = $_FILES['photo']['name'];
$tempname = $_FILES['photo']['tmp_name'];
echo $imagename . " this is temp name " . $tempname;
$add = '.userimg/' . $imagename;
if ($imagename) {
    move_uploaded_file($tempname, $add);
    echo "imageupload";
} else {
    echo "code error";
}
$data = $conn->query(" INSERT INTO `sellerdata`( `name`, `last`, `company`, `address`, `city`,
        `country`, `zip`, `mobile`, `email`,`profile`)
          VALUES 
('$first','$last','$company','$address','$town','$country' ,'$postcode','$mobile','$email','$imagename')");

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
            </div>










        </div>
    </div>

</body>

</html>