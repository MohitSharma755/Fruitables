<?php
session_start();
 
if (isset($_SESSION['mobilenum'])) {
    $mobile = $_SESSION['mobilenum'];

    

}
include ("../config.php");


$productid = $_GET['id'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../Bootstarp css/bootstrap.css">

    <!-- Custom css files -->
    <link rel="stylesheet" href="../Custom css/custom.css">


    <!-- Bootstrap js file -->
    <script src="../Bootsrap js/bootstrap.js"></script>

</head>

<body>

    <form action="" enctype="multipart/form-data" method="post">
        <div class="h1 text-warning text-center py-2">Edit Product's</div>
        <div class="d-flex  justify-content-center ">
            <div class="col-8 mb-4">
                <label for="pr" class="h-color py-2 mb-2">Category <span class="text-danger">*</span> </label>
                <input type="text" name="cat" id="cat" class="rounded-3  py-1 form-control col-12" required="required">



                <!-- <select name="" id="pr" class="form-control">
                <option value="" >Fruit</option>
                <option value="">Vegetables</option>
            </select> -->


                <label for="kg" class="h-color py-2 mb-2">Quantity*</label>
                <input type="text" name="qua" id="kg" class="rounded-3  py-1 form-control col-12" required>

                <label for="kg" class="h-color py-2 mb-2">Rate*</label>
                <input type="text" name="rate" id="rate" class="rounded-3  py-1 form-control col-12" required>

                <label for="img" class="h-color py-2 mb-2">Product Image*</label>
                <input type="file" name="pi" id="img" class="rounded-3  py-1 form-control col-12" required>



                <input type="submit" class="cart mt-2 bg-warning rounded px-3 py-1   border-0" id="addproductbtn"
                    name="add">
            </div>
        </div>
        <?php
        if (isset($_POST['add'])) {
            $cat = $_POST['cat'];


            $quantity = $_POST['qua'];

            $rate = $_POST['rate'];
            $img = $_FILES['pi']['name'];
            $tempname = $_FILES['pi']['tmp_name'];

            $add = '../productimg/' . $img;
            if ($img) {
                move_uploaded_file($tempname, $add);
            }

            $data = $conn->query("UPDATE `product` SET `category`='$cat',`photo`='$img',`quantity`='$quantity',`rate`='$rate' WHERE id='$productid'");
            echo "<script>window.location.href='./admin.php'</script>";


        }


        ?>

    </form>


</body>

</html>