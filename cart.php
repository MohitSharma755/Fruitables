<?php
session_start();
include("header.php");
 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

    <script src="cartajax.js"></script>



</head>
<body>
    
<div class=" back-img">
        <div class="d-flex align-items-center justify-content-center   text-white "><span class="mt-5 h1">Cart
            </span>
        </div>
        <div class="text-center">
            <span class="official-color">Home <span class="ms-2 h-color">/</span></span>
            <span class="official-color ms-2">Pages <span class="ms-2 h-color ">/</span> </span>
            <span class="text-white ms-1">Cart</span>
        </div>
    </div>
        <main class="container">
            <section id="addtocart">
<!-- here code is coming from cartajax.js -->
            </section>
            <!-- <div class="row py-5 ">
            <input type="text" class=" border-0 border-bottom  col-3  " placeholder="Coupn Code">
            <a href="#" class=" btn rounded-5  py-3 ms-3 col-2  border-warning cart">Apply Coupn</a>
        </div> -->
        <!-- <div class="row">
            <div class="col-8"></div>
            <div class="container py-5 mb-4  bg-light rounded col-4">
                <div class="row">
                    <div class="col-12">
                        <h1 class="h-color">Cart Total</h1>
                    </div>
                    <div class="row py-2">
                        <div class="h4 col-10 h-color px-3">Subtotal:</div>
                        <div class="col-2 h-color ">$96</div>
                    </div>
                    <div class="row py-2">
                        <div class="h4 col  h-color px-3">Shipping:</div>
                        <div class="col-6 text-end h-color px-3 mb-4">Flate rate:$3.00 <br> Shipping to Ukraine.</div>
                    </div>
                    <hr>

                    <div class="py-3 row">
                        <div class="h4 col-10 h-color px-3">Total:</div>
                        <div class="col-2 h-color ">$96</div>
                    </div>
                    <hr>

                    <form action="" method="post">
                        <button type="SUBMIT" href="#"
                            class="mt-2   rounded-5 bg-none  py-3 ms-3 col-8 border text-center border-warning cart">PROCEED
                            CHECKOUT</button>
                    </form>


                </div>

            </div>
        </div> -->
        </main>
       

        <?php
        include("footer.php");
        ?>
</body>
</html>