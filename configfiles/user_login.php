<title>User Login</title>
<?php

include ("header.php");
include ("config.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <div class="container col-5">
        <h1 class="official-color text-center">User Login</h1>
        <label for="user">User Name:</label>
        <input type="text" id="user" class="form-control">
        <label for="pass">Password:</label>
        <input type="text" id="pass" class="form-control">
        <input type="submit" name="" id="login" value="Login" class="btn btn-warning mt-3 text-center col-12">
        <p class="mt-4">Not a User 
            <a href="seller_login.php" class="text-decoration-none"><span class="official-color" >Go to Seller Page</span></a>  </p>

    </div>

</body>

</html>