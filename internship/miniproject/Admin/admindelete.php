<?php 

include '../conn.php';

$id = $_GET['del'];

$sql = "DELETE FROM `user` WHERE id = '$id'";
$res = mysqli_query($conn , $sql);

if($res){
    echo"<script>alert('are you sure remove record')</script>";
    echo"<script>window.location.href='admintemplate.php';</script>";
}


?>