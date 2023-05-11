
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adminlte</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">

</head>
<body> <!-- Example Code -->
<?php
   
    include '../conn.php';
    

    if(isset($_GET['edit'])){  

        $id = $_GET['edit'];

        $select = "SELECT * FROM `user` WHERE id=".$id;
        $selectquery = mysqli_query($conn ,$select);
        $res = mysqli_fetch_array($selectquery);

    }

   
   ?> 
   
  <div class="card m-auto " style="width:40rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">   
             <h3 class="m-3 text-info  text-center">Update form</h3> 
    <form action ="adminediting.php" method="post" >
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="name" class="form-control"  name="name"  id="name" value="<?php echo $res['name']; ?>" required>
                 </div>

                 <div class="mb-3">
                  <label for="dob" class="form-label">Date Of Birth</label>
                  <input type="date" class="form-control"  name="dob"  id="dob"  value ="<?php echo $res['dob'] ?>" required>
                 </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control"  name="email" id="email" value="<?php echo $res['email']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Passwords</label>
                    <input type="password" class="form-control" name="passwords"  id="password" value="<?php echo $res['passwords']; ?>"  required>
                  </div>
                
                  <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
                  <input type="submit" name="update" value="Update">

            
              </form>







                      

               

    </li>
    <ul>
  </div>
   
            

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
