<?php 
    session_start();
  
    if(isset($_SESSION['mobilenum'])){
    $usernum = $_SESSION['mobilenum'];
    // echo $usernum;
    }else{
        echo "session not wrk";
    }
    include ("header.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="checkoutajax.js"></script>
    <div class=" back-img">
        <div class="d-flex align-items-center justify-content-center   text-white "><span class="mt-5 h1">Checkout
            </span>
        </div>
        <div class="text-center">
            <span class="official-color">Home <span class="ms-2 h-color">/</span></span><span
                class="official-color ms-2">Pages <span class="ms-2 h-color ">/</span> </span><span
                class="text-white ms-1">Checkout
            </span>
        </div>
    </div>
</head>
<body>
    <main>
        <section id="checkout">

        </section>
    </main>
</body>
</html>