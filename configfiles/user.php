<?php
include ("config.php");

$action = $_POST['action'];
if($action=="user"){



    $first = $_POST['first'];
$last = $_POST['last'];
$company = $_POST['company'];
$address = $_POST['address'];
$town = $_POST['town'];

$country = $_POST['country'];
$postcode = $_POST['postcode'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$imagename = $_FILES['photo']['name'];
$tempname = $_FILES['photo']['tmp_name'];
echo $imagename . " this is temp name " . $tempname;
$add = '.userimg/' . $imagename;
if ($imagename) {
    move_uploaded_file($tempname, $add);
    echo "imageupload";
} else {
    echo "code error";
}
$data = $conn->query(" INSERT INTO `userdata`( `first`, `last`, `company`, `address`, `city`,
        `country`, `zip`, `mobile`, `email`,`profile`)
          VALUES 
('$first','$last','$company','$address','$town','$country' ,'$postcode','$mobile','$email','$imagename')");

echo "<pre>";
print_r($_POST);
echo "</pre>";
}

?>

