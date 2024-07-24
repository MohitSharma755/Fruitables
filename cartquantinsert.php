<?php
session_start();
include ("./Database/config.php");
$action = $_POST['action'];




if (isset($_SESSION['mobilenum'])) {
    $userid = $_SESSION['mobilenum'];
    // echo $userid;
} else {
    echo "session not wrk";
}



if ($action == "add") {

    $userid = $_SESSION['mobilenum'];

    $weight = $_POST['weight'];
    $price = $_POST['sum'];

    $productid = $_POST['id'];
    // echo $weight, $price;

    $cart = $conn->query("SELECT * FROM `cart` where userid='$userid' and productid='$productid'");
    if (mysqli_num_rows($cart) > 0) {
        $output = mysqli_fetch_assoc($cart);

        $data = $conn->query("UPDATE `cart` SET `quantity`='$weight' , `totalprice`='$price' WHERE userid='$userid' and productid='$productid'");
       







    }

}
?>