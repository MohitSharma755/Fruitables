<?php
session_start();
if (isset($_SESSION['login_type'])) {
    $mobile = $_SESSION['mobilenum'];
 
}
include ('Database/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="./Bootstarp css/bootstrap.css">

    <!-- Custom css files -->
    <link rel="stylesheet" href="./Custom css/custom.css">



    <!-- Bootstrap js file -->
    <script src="./Bootsrap js/bootstrap.js"></script>


    <!-- Custom JS -->
    <script src="Customjs/index.js"></script>




    <!-- Jquery Cdn -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <h1 class="official-color text-center col-xl-12 col-md-12 col-sm-12 col-lg-12">Thanks For Shopping</h1>
    <div class=" m-3  py-5">
        <div class="row py-5 ms-5 ">
            <div class="col-xl-8 ">
                <h1>Your Orders</h1>

                <?php
                $output = "

            <!-- First col section end -->

            <div class='col-xl-6  col-lg-5 col-sm-12'>
                <div class='container py-5'>
                    <div class='row'>

                        <div class='col-2 h-color '>Products</div>
                        <div class='col-2 h-color px-5'>Name</div>
                        <div class='col-2 h-color px-5'>Rate </div>
                        <div class='col-2 h-color px-1 '>Quantity</div>
                        <div class='col-1 h-color px-4'>Total</div>
                   
                       
                        <hr>
                    </div>
                    </div>
                    

                    ";
                ?>
                <?php
                if (isset($_SESSION['mobilenum'])) {
                    $mobile = $_SESSION['mobilenum'];
                  
                


                }
                $cart = $conn->query("SELECT * FROM `cart` where userid='$mobile'");
            
                if (mysqli_num_rows($cart) > 0) {
                    $output .= "";
                    while ($result = mysqli_fetch_assoc($cart)) {

                        $name = $result['name'];
                        $photo = $result['photo'];
                        $quantity = $result['quantity'];
                        $rate = $result['rate'];
                        $totalprice = $result['totalprice'];

                        
                        $sum+= number_format($totalprice);
                       
                        $output .= "  <!-- First Item start -->
                    <div class='row'>
                        <div class='col-3'>

                            <img src='./productimg/$photo' class='img-fluid  py-3 rounded-circle' alt=''>
                        </div>

                        <div class='col-3 h-color '>
                            <p class='h-color  '>$name</p>
                        </div>



                        <div class='col-2 h-color'>
                          $rate
                        </div>


                        <div class='col-2 h-color'>$quantity</div>

                        <div class='col-1 h-color'>
                         $totalprice
                        </div>
                        
                    </div>
                    
                    <!-- First item end -->
                    ";
                  
                       
                    }

                 
                    $ship = '40';
                    $bb = $sum;
                    $aa = $bb + $ship;
                  
                    $add = "   <div class='float-end'>Total Amount</div>
                  <br>
                   <div class='float-end'>$bb</div>
                      <br>
                   <div class='float-end'>Shipping Charge is 40</div>
                       <br>
                   <div class='float-end'>$aa</div>
                   <div class='float-end'>Pay =</div><br>
                   <div class='float-end'>Payment Type :Cash On Deleivery</div>
                     
                   "
                     ;
                }
                echo $output;
                echo $add;
                ?>
            </div>
        </div>
        <div class="col-xl-4">
            <h1>Address</h1>

            <?php
           
            $data = $conn->query("SELECT * FROM `usercheck` Where usersession =$mobile ");
            

            if ($total=mysqli_num_rows($data)) {
             
                $addcollect = "  ";
                while ($collect = mysqli_fetch_assoc($data)) {
                    $name = $collect['first'];
                    $last = $collect['last'];
                    $address = $collect['address'];
                    $city = $collect['town'];
                    $country = $collect['country'];
                    $zip = $collect['postcode'];
                    $phone = $collect['mobile'];
                    $email = $collect['email'];
         
                }
                echo $addcollect .= " <div>This is your Address <br>  $name$last$address.$city$country <br> Your Pin code: $zip <br>Phone Number: $phone<br>Email: $email  </div>";
        }
         
          
   
        ?>
        <a class='official-color' href='index.php'>Continue Shoping</a>
        </div>
    </div>

    </div>

</body>

</html>