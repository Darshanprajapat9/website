<?php 
session_start();


      

    include '../conn.php';

    if(isset($_POST['submit'])){
  
    $email = $_POST['email'];  
    $passwords = $_POST['passwords'];  
  
   
    $email = stripcslashes($email);  
    $passwords = stripcslashes($passwords);  
    $email = mysqli_real_escape_string($conn, $email);  
    $passwords = mysqli_real_escape_string($conn, $passwords);  

    $sql = "SELECT * FROM `admin` WHERE email ='$email' and  passwords ='$passwords' ";
    //echo $sql;
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);


    if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } 

//echo '<pre>';print_r($row);echo '</pre>';
//exit();
$count = mysqli_num_rows($res);

//echo $count;

    if($count > 0){
        $_SESSION["loggedin"] = true;
        echo '<script>alert("login successful")</script>'; 
        echo '<script>window.location.href="admintemplate.php";</script>';
    }else{ 
        echo '<script>window.location.href="admin.php?error=1";</script>';
    }
}

?>