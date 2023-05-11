<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Piazzolla:wght@200;300;900&family=Source+Sans+Pro:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Bootstrap/css/style.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
  </head>
  <body class="body">

  

   <div class="login_box p-2">
      <?php
        if(isset($_GET['error']) && $_GET['error'] == 1){
      ?>
          <div class='alert alert-danger' role='alert'>please try again!</div>
      <?php } ?>

        <p class="m-3 text-center">Admin<span>LTE</span></p>
        <div class="main_box m-3 offset-1">
            <div class="row">
            <div class="col-md-12">
             <h5 class="heading_singin m-4 text-center">Signin in start your session</h5>
            
             <form  action="admindeshboard.php" method="post" >
                <div class="m-3 offset-3 email">
                <i class="bi bi-envelope-fill emailicon"></i>
                    <input type="email" class="form-control" name="email" placeholder="Email" >
                </div>
                <div class="m-3 offset-3 password ">
                <i class="bi bi-lock-fill  passwordicon" ></i>
                    <input type="password" class="form-control" name="passwords" placeholder="Password">
                </div>
                <div class="m-3 offset-3 d-flex check">
               <div class="checkbox"><input type="checkbox" class="form-check-input" id="checkbox">
                      <label for="checkbox " class="m-1">Remember Me </label></div>   
                      <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </div>            
             </form>
            
            <h5 class="text-center or">--OR--</h5>
              
            <div class="login_btn mt-3 ">
            <a class="btn btn-primary facebook" href="#" role="button"><i class="bi bi-facebook m-2"></i>Sign in using Facebook</a>
            <a class="btn btn-danger mt-2" href="#" role="button"><i class="bi bi-google m-2"></i>Sign in using Google+</a>
            </div>
             
            <div class="link m-3">
            <a href="#" class=" text-decoration-none mt-2">I forgot my password </a> <br>
              <a href="#" class=" text-decoration-none">Register a new membership</a>
            </div>
         
          
       
                
           
            
            </div>
            </div>
        </div>
        
     </div>   

    <script src="../Bootstrap/js/bootstrap.js"></script>
  </body>
</html>

