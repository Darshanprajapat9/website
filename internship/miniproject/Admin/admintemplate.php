<?php 
  session_start();

  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    //header("location: admin.php");
    //echo 'success';
    
  }else{
    header("location: admin.php");
    exit;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adminlte</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./admin.css">
</head>
<body>
  
  <div class="main">
    <!-----left-side-->
     <div class="leftside">

          <div class="adminlogo">
          <img src="./img/AdminLTELogo.png" alt="">
          <h3>AdminLTE3</h3>
          </div>

          <div class="adminname">
            <img src="./img/user2-160x160.jpg" alt="">
            <h3>Alexander Pierce</h3>
          </div>

          <div class="input-group m-3">
          <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <span class="input-group-text" id="basic-addon2" ><i class="bi bi-search"></i></span>
          </div>

   
          <div class="deshbord">
            <select class="deshboard1">
              <option value="deshbord" class="desh2">Deshboard</option>
              <option value="deshbord V1" class="desh2"><h2><i class="bi bi-circle"></i> Deshboard V1</h2></option>
              <option value="deshbord V2" class="desh2"><i class="bi bi-circle"></i> Deshboard V2</option>
              <option value="deshbord V3" class="desh2"> <i class="bi bi-circle"></i>Deshboard V3</option>
            </select>
            <i class="bi bi-speedometer2"></i> 
            </div>


          <div class="weight">
            <i class="bi bi-grid-3x3-gap-fill"></i>
            <h3>Widgets</h3>
          </div>

          
          <div class="layout">
            <select class="layout1">
              <option value="layout option" class="lay2">Layout Option</option>
              <option value="Top navigate" class="lay2"><h2><i class="bi bi-circle"></i> Top Navigation</h2></option>
              <option value="Top navigate" class="lay2"><h2><i class="bi bi-circle"></i> Top Navigation + Sidebar</h2></option>
              <option value="Top navigate" class="lay2"><h2><i class="bi bi-circle"></i> Boxed </h2></option>
              <option value="Top navigate" class="lay2"><h2><i class="bi bi-circle"></i> Fixed Sidebar</h2></option>
              <option value="Top navigate" class="lay2"><h2><i class="bi bi-circle"></i> Fixed Sidebar +Sidebar</h2></option>
              </select>
              <i class="bi bi-file-earmark-text"></i>
            </div>

          <div class="charts">
            <select class="charts1">
              <option value="charts" class="chat2">Charts</option>
              <option value="charts" class="chat2"><h2><i class="bi bi-circle"></i> ChartsJS</h2></option>
              <option value="charts" class="chat2"><h2><i class="bi bi-circle"></i>Float </h2></option>
              <option value="charts" class="chat2"><h2><i class="bi bi-circle"></i> Inline</h2></option>
              <option value="charts" class="chat2"><h2><i class="bi bi-circle"></i> uPlot</h2></option>
            </select>
            <i class="bi bi-pie-chart-fill"></i>
          </div>

          <div class="uielements">
            <select class="uielements1">
              <option value="uielements name" class="uiele2">UI Elements</option>
              <option value="uielements name" class="uiele2"><h2><i class="bi bi-circle"></i> General</h2></option>
              <option value="uielements name" class="uiele2"><h2><i class="bi bi-circle"></i>Icons </h2></option>
              <option value="uielements name" class="uiele2"><h2><i class="bi bi-circle"></i> Buttons</h2></option>
              <option value="uielements name" class="uiele2"><h2><i class="bi bi-circle"></i> Sliders</h2></option>
              <option value="uielements name" class="uiele2"><h2><i class="bi bi-circle"></i> Modals & Alerts</h2></option>
              <option value="uielements name" class="uiele2"><h2><i class="bi bi-circle"></i>Navbar &  Tabs</h2></option>
              <option value="uielements name" class="uiele2"><h2><i class="bi bi-circle"></i> Timeline</h2></option>
              <option value="uielements name" class="uiele2"><h2><i class="bi bi-circle"></i> Ribbons</h2></option>
            </select>
            <i class="bi bi-tree-fill"></i>
          </div>

          <div class="Forms">
            <select class="Forms1">
              <option value="Forms" class="form2">Forms</option>
              <option value="Forms" class="form2"><h2><i class="bi bi-circle"></i> General Element</h2></option>
              <option value="Forms" class="form2"><h2><i class="bi bi-circle"></i>Advance Element </h2></option>
              <option value="Forms" class="form2"><h2><i class="bi bi-circle"></i> Editors</h2></option>
              <option value="Forms" class="form2"><h2><i class="bi bi-circle"></i> Validation</h2></option>
            </select>
            <i class="bi bi-pencil-square"></i>
          </div>

          <div class="logout">
          <i class="bi bi-box-arrow-right"></i>
            <h3> <a href="adminlogout.php"> logout</a></h3>
          </div>
        
 
    </div>
     <!-----left-side-->

    <!---right side-->
    <div class="rightside">

    <nav class="navbar navbar-expand-lg navbar-white bg-white">
  <a class="navbar-brand" href="#"> <i class="bi bi-justify"></i></a>
  <a class="navbar-brand" href="#"> <p>Home</p> </a>
  <a class="navbar-brand" href="#"><p>Contact</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <i class="bi bi-search"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="bi bi-chat-right-dots"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="bi bi-bell"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"> <i class="bi bi-arrows-fullscreen"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">   <i class="bi bi-grid-fill"></i></a>
      </li>
    </ul>
  </div>
</nav>

        <div class="heading">
          <h2  style="margin:20px; font-size:30px; font-family:'Source Sans Pro', sans-serif; font-weight:300;"> DataTables</h2>
         </div>
         
         <!----tabel start-->
         <ul class="list-group m-3">
             <li class="list-group-item d-flex"> 
              <p class="ms-4"> DataTable with minimal features & hover style</p>
                        <!-- Button trigger modal -->
               <p  class="btn btn-light adduser" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Add user
           </p>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="admininsert.php"  name="form" class="form" method="post">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="name" class="form-control"  name="name"  id="name" required>
                 </div>

                 <div class="mb-3">
                  <label for="dob" class="form-label">Date Of Birth</label>
                  <input type="date" class="form-control"  name="dob"  id="dob" required>
                 </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control"  name="email" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Passwords</label>
                    <input type="password" class="form-control" name="passwords"  id="password"  required>
                  </div>

               <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="add">Add</button>
                </div>
              </form>
      </div>
     
    </div>
  </div>
</div>


            </li>
             <li class="list-group-item ">
                    <div class="container">
                    <div class="row">
                        <div class="userdata">
                  
                            <div class="col-md-11 m-2">
                                <table class="table table-bordered bg-white">
                                    <thead>
                                        <tr>
                                           <td class="font-weight-bold">ID</td> 
                                           <td class="font-weight-bold">Name</td>
                                           <td class="font-weight-bold">Date of Birth</td>
                                           <td class="font-weight-bold">Email</td>
                                           <td class="font-weight-bold">Password</td>
                                           <td>Register Time</td>
                                           <td  colspan="2">Action</td>
                                        <tr>
                                    </thead>
                                    <tbody >
                                    <?php 
                    
                                                include '../conn.php';

                                                 $limit = 8;
                                                
                                                  
                                                 if(isset($_GET['page'])){
                                                    $page =$_GET['page'];
                                                 }else{
                                                    $page= 1;
                                                 }

                                                 $offset = ($page-1) * $limit;


                                                $sql = "SELECT * FROM `user` LIMIT {$offset},{$limit} ";
                                                $res = mysqli_query($conn , $sql);

                                                 while($row = mysqli_fetch_array($res)){    
                                                  ?>
                                               
                                            
                                        <tr>
                                            <td><?php echo $row['id']?></td>
                                            <td><?php echo $row['name']?></td>
                                            <td><?php echo $row['dob']?></td>
                                            <td><?php echo $row['email']?></td>
                                            <td><?php echo $row['passwords']?></td>
                                            <td><?php echo $row['time']?></td>
                                            <td><a href="admindedit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" ><i class="bi bi-pencil-square"></i></a></td>  
                                            <td> <a href="admindelete.php?del=<?php echo $row['id']; ?>" class="edit_btn" ><i class="bi bi-trash3"></i></a></td>   
                                          </tr><?php }?>
                                    </tbody>
                                </table>


                                 <?php 
                                  $sql1 = "SELECT * FROM  user";
                                   $result1 = mysqli_query($conn ,$sql1); 

                                   if(mysqli_num_rows($result1) > 0){
                                    mysqli_num_rows($result1) ;

                                    $totalrecords = mysqli_num_rows($result1) ;
                                           
                               
                                    $total_page = ceil($totalrecords / $limit);
                                  
                                    echo "<ul class='pagination justify-content-end'>";
                                      if($page > 1 ){
                                        echo '<li class="page-item"><a class="page-link" href="admintemplate.php?page='.($page-1).'">Prev</a> </li>';
                                      }
                                    for($i = 1; $i <=$total_page ; $i++ ){
                                      
                                    
                                        ?>
                                        <li class="page-item ">
                                            <a class="page-link <?php if($page == $i){ echo 'active'; } ?>" href="admintemplate.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
                                     <?php
                                    }
                                    if($total_page > $page ){
                                        echo '<li class="page-item"><a class="page-link" href="admintemplate.php?page='.($page + 1).'">Next</a> </li>';
                                      }
                                    echo " </ul>";

                                   }
                                 ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
 </li>

</ul>

      
         <!-----tabel end-->
    </div>
     <!-----right-side-->
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>












































<!----------------<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./admin.css">
  <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Document</title>

</head>
<body>
  <div class="adminpage"  >
  <div class="navigation" onclick="togglemenu()">
    <ul>
     
      <li> <a href="">
        <sapn class="icon"><img src="../admin/AdminLTELogo.png"></sapn>
        <sapn class="title"><h2>AdminLTE</h2></sapn>
        </a>    </li>
      <hr>

      <li> <a href="">
        <sapn class="icon"><img src="../admin/admin.png"></sapn>
        <sapn class="title"><h2></h2>Alexander Pierce</sapn>
        </a>    </li>
        <hr>
      <li>  <a href="">
        <sapn class="icon"></sapn>
        <sapn class="title">Deshboard</sapn>
        </a> </li>
     

      
          <li>    <a href="">
        <sapn class="icon"><i class="bi bi-person-fill-add"></i></sapn>
        <sapn class="title">Coustmore</sapn>
        </a></li>


      <li><a href="">
        <sapn class="icon"><i class="bi bi-chat"></i></sapn>
        <sapn class="title">Message</sapn>
        </a></li>



      <li><a href="">
        <sapn class="icon"><i class="bi bi-gear"></i></sapn>
        <sapn class="title">Tabel</sapn>
        </a> </li>
   
    
    
      <li><a href="">
        <sapn class="icon"><i class="bi bi-box-arrow-right"></i></sapn>
        <sapn class="title">Logout</h1></sapn>
        </a>  </li>
    </ul>
  </div>

  <div class="navbar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <h3 class="toggle"><i class="bi bi-box-arrow-in-right"></i></h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  </div>

<script src="admin.js"></script>
</body>
</html>

<!------ <div class="topbar">
      <div class="search">
          <h3 class="toggle" onclick="togglemenu()"> <i class="bi bi-arrow-bar-left"></i></h3>
            <div class="bars">
                <a href=""><h5>Home</h5></a>
                <a href=""><h5>Contact</h5></a>
            </div>

        <div class="bars-icon">
             <p><i class="bi bi-search"></i></p>
             <p><i class="bi bi-chat-right-dots"></i></p>
             <p><i class="bi bi-bell"></i></p>
             <p><i class="bi bi-arrows-fullscreen"></i></p>
             <p><i class="bi bi-grid-fill"></i></p>
      </div>

      </div>-->