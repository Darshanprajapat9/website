<?php
session_start();

include '../conn.php';

if(isset($_POST['add'])){
    $name = $_POST['name'];
   $dob =$_POST['dob'];
   $email = $_POST['email'];
   $passwords =$_POST['passwords'];

   $sql = "INSERT INTO `user`(`name`, `dob`, `email`, `passwords`) VALUES ('$name','$dob','$email','$passwords')";

   $result = mysqli_query($conn ,$sql);

   if($result){
    echo '<script>alert("Data insert successful")</script>'; 
    echo '<script>window.location.href="admintemplate.php";</script>'; 
   }
}
?>