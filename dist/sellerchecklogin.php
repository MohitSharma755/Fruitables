<?php
include ("config.php");

 

$data = $conn->query("SELECT * FROM `userdata`");
if (mysqli_num_rows($data) > 0) {
    while ($total = mysqli_fetch_assoc($data)) {
        // $name = $total['name'];
        $pass = $total['password'];
        $mobile=$total['mobilese'];
        
    }

}

 



?>