<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<?php 

include '../conn.php';

if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $name =   $_POST['name'];
    $dob = $_POST['dob'];
    $email =  $_POST['email'];
    $passwords = $_POST['passwords'];

    $update= "UPDATE `user` SET `name`= '$name',`dob`='$dob',`email`='$email',`passwords`='$passwords' WHERE `id` = ".$id;

    $result = mysqli_query($conn , $update);

    if($result){

        echo"<script>alert('update successfull')</script>";
        echo"<script>window.location.href='admintemplate.php';</script>";
    }
}


?>
</body>
</html>