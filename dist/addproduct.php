<title>Add Product</title>
<?php
session_start();

if (isset($_SESSION['mobilenum'])) {
    $mobile = $_SESSION['mobilenum'];



}


include ("config.php");
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


    <!-- Bootstrap js file -->
    <script src="./Bootsrap js/bootstrap.js"></script>
    <!-- <script src="addproduct.js"></script> -->

</head>

<body>

    <form action="" enctype="multipart/form-data" method="post">
        <div class="h1 text-warning text-center py-2">Add Product's</div>
        <div class="d-flex  justify-content-center ">
            <div class="col-8 mb-4">
                <label for="pr" class="h-color py-2 mb-2">Category <span class="text-danger">*</span> </label>
                <input type="text" name="cat" id="cat" class="rounded-3  py-1 form-control col-12" required="required">

                <label for="pr" class="h-color py-2 mb-2">Product Name <span class="text-danger">*</span> </label>
                <input type="text" name="product" id="pr" class="rounded-3  py-1 form-control col-12"
                    required="required">

                <!-- <select name="" id="pr" class="form-control">
                <option value="" >Fruit</option>
                <option value="">Vegetables</option>
            </select> -->
                <label for="Des" class="h-color py-2 mb-2">Description*</label>
                <input type="text" name="des" id="Des" class="rounded-3  py-1 form-control col-12" required="required">

                <label for="kg" class="h-color py-2 mb-2">Quantity*</label>
                <input type="text" name="qua" id="kg" class="rounded-3  py-1 form-control col-12" required>

                <label for="kg" class="h-color py-2 mb-2">Rate*</label>
                <input type="text" name="rate" id="rate" class="rounded-3  py-1 form-control col-12" required>

                <label for="img" class="h-color py-2 mb-2">Product Image*</label>
                <input type="file" name="pi" id="img" class="rounded-3  py-1 form-control col-12" required>

                <label for="img" class="h-color py-2 mb-2 d-none">Seassion*</label>
                <input type="text" value="<?php echo $mobile ?>" name="se" id="img"
                    class="rounded-3  py-1 form-control col-12  d-none" required>

                <input type="submit" class="cart mt-2 bg-warning rounded px-3 py-1   border-0" id="addproductbtn"
                    name="add">
            </div>
        </div>
        <?php
        if (isset($_POST['add'])) {
            $cat = $_POST['cat'];

            $name = $_POST['product'];
            $description = $_POST['des'];
            $quantity = $_POST['qua'];
            $mobile = $_POST['se'];
            $img = $_FILES['pi']['name'];
            $tempname = $_FILES['pi']['tmp_name'];

            $add = './productimg/' . $img;
            if ($img) {
                move_uploaded_file($tempname, $add);
            }
            $rate = $_POST['rate'];

            $data = $conn->query("INSERT INTO `product`(`id`, category, `name`,`description`,`photo`,`quantity`,`rate`,`sellermobile`) 
            VALUES (NULL,'$cat','$name','$description','$img','$quantity','$rate','$mobile')");
            echo "<script>window.location.href='./admin/admin.php'</script>";


        }



        ?>

    </form>


</body>

</html>