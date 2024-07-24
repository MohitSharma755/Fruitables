<script src="test.js"></script>
<script src="./Customjs/id_rate.js"></script>
 
<?php
session_start();
if (isset($_SESSION['login_type']) || ($_SESSION['mobilenum'])) {
        $mobile = $_SESSION['mobilenum'];
    $loginType = $_SESSION['login_type'];
    
}
include ("config.php");
if (isset($_SESSION['mobilenum'])) {
    $userid = $_SESSION['mobilenum'];
    $action = $_POST['action'];
 
    if ($action == "showdata") {
        $data = $conn->query("SELECT * FROM `cart` Where userid='$userid' ");
        if (mysqli_num_rows($data) > 0) {
            $output = "  <div class='row mt-4'>
    
                <div class='col-2 h-color '>Products</div>
                <div class='col-2 h-color'>Name</div>
                <div class='col-2 h-color'>Price</div>
                <div class='col-2 h-color '>Quantity</div>
                <div class='col-2 h-color '>Total</div>
                <div class='col-2 h-color '>Handler</div>
                <hr>
            </div>";

            while ($total = mysqli_fetch_assoc($data)) {
                $name = $total['name'];
                $description = $total['description'];
                $photo = $total['photo'];

                $rate = $total['rate'];
                $id = $total['productid'];
                $quantity = $total['quantity'];
                $totalprice = $total['totalprice'];
                // echo $rate;

                $output .= "
    
     
    
                <div class='row border-bottom '>
                            <div class='col-2 contanier'>
                                <img src='./productimg/$photo' class='img-fluid col-5 col-sm-7 py-3 rounded ' alt=''>
                                
                            </div>
    
                            <div class='col-2 h-color   py-4'>
                                <p class='h-color col-10 '>$name</p>
                            </div>
    
                            <div class='col-2 h-color  py-4 ' id='price$id'>$rate </div>
    
                            <div class='col-2 h-color'>
                                <div class='row py-4'>
                                            <div class='col-2 rounded-circle bg-light text-secondary btn' onclick='countminus($id)' id='minus'>
                                                <span  type='button'>−</span>
                                            </div>
                                            
                                    <div id='quantity$id' class='col-2 mt-1 '>$quantity</div>
    
                                            <div class='col-2 rounded-circle bg-light text-secondary btn 'id='click' onclick='countadd($id)'>
                                                <span  type='button' class='text-center' >+</span>
                                            </div>
                                </div>
                            </div>
    
    
                            <div class='col-2 h-color py-4' id='totalprice$id'> $totalprice </div>
    
                            <div class='col-2 h-color py-3'>
    
                                <button class='btn'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'
                                        class='text-danger rounded-circle bg-light' onclick='  del($id)' viewBox='0 0 32 32'>
                                        <path fill='currentColor'
                                            d='m24.778 21.42l-5.502-5.503l5.5-5.502l-2.827-2.83l-5.503 5.502l-5.502-5.502l-2.828 2.83l5.5 5.502l-5.5 5.502l2.83 2.828l5.5-5.502l5.5 5.502z' />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
    
                ";
 

            }
            echo $output;
        }
        
    }
}


?>
   <div class="row py-4 ">
            <input type="text" class=" border-0 border-bottom  col-xl-3   " placeholder="Coupn Code">
            <a href="#" class=" btn rounded-5  py-3 ms-3 col-2  border-warning cart">Apply Coupn</a>
        </div>
<div class='row py-5'>
            <div class='col-8'></div>
            <div class='container py-5 mb-4  bg-light rounded col-4'>
                <div class='row'>
                    <div class='col-12'>
                        <h1 class='h-color'>Cart Total</h1>
                    </div>
                    <div class='row py-2'>
                        <div class='h4 col-10 h-color px-3'>Subtotal:</div>
                        <div class='col-2 h-color '>$96</div>
                    </div>
                    <div class='row py-2'>
                        <div class='h4 col  h-color px-3'>Shipping:</div>
                        <div class='col-6 text-end h-color px-3 mb-4'>Flate rate:$3.00 <br> Shipping to Ukraine.</div>
                    </div>
                    <hr>

                    <div class='py-3 row'>
                        <div class='h4 col-10 h-color px-3'>Total:</div>
                        <div class='col-2 h-color '>$96</div>
                    </div>
                    <hr>

                   
                        <a  href='checkout.php'
                            class='mt-2 btn  rounded-5 bg-none  py-3 ms-3 col-8 border text-center border-warning cart'>PROCEED
                            CHECKOUT</a>
                  

                </div>

            </div>
        </div>