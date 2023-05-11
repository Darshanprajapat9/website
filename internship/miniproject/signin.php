<?php 

    session_start();
    
  
    include 'conn.php';
  
    $email = $_POST['email'];  
    $passwords = $_POST['passwords'];  
  
   
    $email = stripcslashes($email);  
    $passwords = stripcslashes($passwords);  
    $email = mysqli_real_escape_string($conn, $email);  
    $passwords = mysqli_real_escape_string($conn, $passwords);  

    $sql = "SELECT * FROM `user` WHERE email ='$email' and  passwords ='$passwords' ";
    //echo $sql;
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);


//echo '<pre>';print_r($row);echo '</pre>';
//exit();
$count = mysqli_num_rows($res);

//echo $count;

if($count > 0){
          
    $_SESSION['ids'] = $row['id'];
    $_SESSION['username'] = $row['name'];
    $_SESSION['date']=$row['dob'];
    $_SESSION['emailaddress'] = $row['email'];
    $_SESSION['passwordss'] = $row['passwords'];

    echo '<script>alert("login successful")</script>'; 
    echo '<script>window.location.href="deshboard.php";</script>';


}
else {
    echo '<script>alert("invalid login ")</script>'; 
    echo '<script>window.location.href="signin.html";</script>'; 

}

?>