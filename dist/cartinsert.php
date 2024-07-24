 
<?php
session_start();
include ("config.php");

$action = $_POST['action'];
if ($action == "addtocart") {
    $userid = $_SESSION['mobilenum'];
    $id = $_POST['id'];
    // echo $id;

    $data = $conn->query("SELECT * FROM `product` WHERE `id`= '$id'");
    $total=mysqli_num_rows($data);
    // echo $total;
    if (mysqli_num_rows($data) > 0) {
        $result = mysqli_fetch_assoc($data);
        $id = $result['id'];
        $cat = $result['category'];
        $name = $result['name'];
        $description = $result['description'];
        $photo = $result['photo'];
        $quantity = $result['quantity'];
        $rate = $result['rate'];
        
        $data = $conn->query("INSERT INTO `cart`(`id`,`userid`,category, `name`, `description`,`quantity`,`photo`,`totalprice`, `rate`,`productid` ) VALUES

        (NULL,'$userid','$cat','$name','$description','1','$photo','$rate','$rate','$id')");
        if ($data) {
            echo $name . " " . "add in cart";
        }
        
    }
}

// if($action=="addquantityintocart"){
//     // $totalprice=$_POST['totalprice'];
//     $weight =$_POST['weight'];
//     // echo $weight;
//     '<script>alert ($weight)</script>';
//     $data = $conn->query("INSERT INTO `cart`(`id`,`userid`, `quantity`) VALUES

//         (NULL,'$userid','$weight')");
//         if ($data) {
//             echo $name . " " . "add in cart";
//         }
//     // echo $totalprice ,$weight;
// }

?>