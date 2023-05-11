<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
   
    <div class="container">
        <div class="row">
        <h1 class="text-center" >welcome</h1>
      <h5 class="text-end mr-3"><a href="logout.php" class="btn btn-outline-warning">logout</a></h5>

            <div class="col-md-6 mt-5 offset-3">
                <table class="table table-hover table-bordered">
                <?php 
                    session_start();
                     if(!isset($_SESSION['username']))
                   {
                    echo '<script>window.location.href="signin.html";</script>'; 
                   }
                     ?> 
                    <tbody>
                        <tr>
                          <td>Id</td>
                          <td><?php  echo $_SESSION['ids']; ?></td>
                        </tr>
                        <tr>
                          <td>Name</td>
                          <td><?php   echo $_SESSION['username']; ?></td>
                        </tr>
                        <tr>
                          <td>Date Of Birth</td>
                          <td><?php   echo $_SESSION['date']; ?></td>
                        </tr>

                        <tr>
                          <td>Email</td>
                          <td><?php    echo $_SESSION['emailaddress'];?></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td><?php  echo $_SESSION['passwordss']; ?></td>
                        </tr>
                      </tbody>
                </table>
            </div>
        </div>
    </div>
  
</body>
</html>