   <?php 
   session_start();
   
   include 'conn.php';

  if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email =$_POST['email'];
    $passwords = $_POST['passwords'];


    $user = "SELECT *FROM  `user` WHERE email = '$email'";{
      $res = mysqli_query($conn , $user);
      $count = mysqli_num_rows($res);
      if($count > 0){
        echo '<script>alert("you have all ready account")</script>';
        echo '<script>window.location.href="index.html";</script>'; 
      }
      else{
        $sql = "INSERT INTO `user`( `name`,`dob`, `email`,`passwords`) VALUES('$name','$dob','$email','$passwords')";

        $result = mysqli_query($conn ,$sql);
    
        if($result){
            echo '<script>alert("Data insert successful")</script>'; 
            echo '<script>window.location.href="signin.html";</script>'; 
        }
      }
    }



  }

   ?>