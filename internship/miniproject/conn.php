<?php
$servername= "localhsot";
$username = "root";
$password = "";
$dbname = "";

$conn = mysqli_connect("localhost","root","","ajax");
if($conn ==false){
    die("could'not connect".mysqli_connect_error());
}
?>