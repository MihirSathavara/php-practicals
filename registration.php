<?php

if(isset($_POST['submit'])){


    $name=$_POST['fname'];
    $mobile_no=$_POST['mobile_no'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['password'];

    include 'user.php';

    $obj = new user();

    $ar = $obj->insert($name,$mobile_no,$email,$address,$password);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DatsBase</title>
</head>
<body>
    <h2>Register</h2>
</body>
</html>