<?php
include ("config.php");

$action = $_POST["action"];
if ($action == "checkout") {

    $first = $_POST['first'];
    $last = $_POST['last'];
    $company = $_POST['company'];
    $address = $_POST['address'];
    $town = $_POST['town'];
    $country = $_POST['country'];
    $postcode = $_POST['postcode'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $account = $_POST['account'];
    $ship = $_POST['ship'];
    $orders = $_POST['orders'];


    $data = $conn->query("INSERT INTO `usercheck` (`first`,`last`,`usersession`,`address`,`town`,
    `country`,`postcode`,`mobile`,`email`, `ship`,`orders`) 
    VALUES 
('$first','$last','$company','$address','$town','$country'
,'$postcode','$mobile','$email','$ship','$orders')");






}













?>