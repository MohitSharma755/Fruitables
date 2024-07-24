<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
 
include("../config.php");
if (isset($_POST['logoutMeOUT'])) {
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    // Redirect to login page
    header("Location: login.php");
    exit(); // Ensure no further code is executed after redirect
} else {
    // echo "value is already set";
    // echo "Please click the logout button to log out.";
}
if (isset($_SESSION['login_type']) && ($_SESSION['mobilenum'])) {
    $mobile = $_SESSION['mobilenum'];
    $logintype = $_SESSION['login_type'];

}
$data = $conn->query("SELECT * FROM userdata WHERE `mobilese`='$mobile' AND `login_type`='$logintype'");
if (mysqli_num_rows($data) > 0) {
    $result = mysqli_fetch_assoc($data);
    // echo $result;
    $name = $result['first'];
    $last = $result['last'];
    // echo $name.$last;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../Bootstarp css/bootstrap.css">

    <!-- Custom css files -->
    <link rel="stylesheet" href="../Custom css/custom.css">

    <!-- Bootstrap js file -->
    <script src="../Bootsrap js/bootstrap.js"></script>


    <!-- Custom JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="admin.js"></script> -->
    <script src="../Customjs/index.js"></script>


</head>

<body>




    <div class='official-color h3 text-center py-2'>ADMIN PANEL</div>

    <div class='row'>
        <div class='col-xl-2'>
            <div class='official-color h3'></div>

        </div>
        <div class='col-xl-10 '>
            <div class='row'>
                <div class='col-8 '>
                    <?php echo "Welcome " . $name . " " . $last ?>
                </div>
                <!-- <form action="" method="post" class="col-2">
                <button class='cart border-0    btn mb-3' name="logout" >Logout</button>
                </form> -->
                <div class="col-4">
                    <form method="POST">
                        <button type="submit" name="logoutMeOUT" class="btn btn-danger">Logout</button>
                    </form>

                </div>



            </div>

            <div class=' row official-background m-5 align-items-center'>
                <!-- <div class='col-1'>ID</div> -->
                <div class='col-2 text-center'>Product Name</div>

                <div class='col-4 text-center'>Image</div>
                <div class='col-1 px-5'>Rate</div>
                <div class='col-2' style="padding-left:5rem">Quantity</div>
                <a href='../addproduct.php' class='btn cart col-1 text-dark'><span class="text-dark">Add
                        Product</span></a>

            </div>
        </div>
    </div>


    <?php




    $data = $conn->query("SELECT * FROM `product` where sellermobile=$mobile");
    if (mysqli_num_rows($data) > 0) {
        $output = "";
        while ($total = mysqli_fetch_assoc($data)) {
            $id = $total['id'];
            $name = $total['name'];
            $image = $total['photo'];
            $quantity = $total['quantity'];
            $rate = $total['rate'];
           
    



            $output = "
            
            
              <div class=' row'>

     <div class='col-xl-2'></div>
     <div class='col-xl-8'>
        <div class='row py-4'>
                    <div class='col-1'></div>
                    <div class='col-3'>$name</div>

         <img src='../productimg/$image' alt='' class='col-2 ps-5 '>
                <button class='cart border-0 btn float-end col-2'onclick='delte($id)'>DELETE</button>
                <div class='col-1'>$rate.kg</div>
                <div class='col-2 '>$quantity.kg</div>
                <a href='./editproduct.php?id=$id' class='col-1 cart border-0 btn float-end'>Edit</a>
         </div>
                 
            </div>
            </div>
            
             
      
          
     
            ";


            echo $output;

        }


    }
    ?>








</body>

</html>