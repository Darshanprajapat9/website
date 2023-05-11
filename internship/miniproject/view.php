             
                <?php 
                session_start();
                

                ?>
                <!doctype html>
                <html lang="en">
                <head>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.css">
                

                    <title>Hello, world!</title>
                    <style>
                        .active{
                            background:green;
                            color:#FFFFFF;
                        }
                    </style>
                </head>
                <body>
                  
                <div class="container">
                    <div class="row">
                        <div class="userdata">
                            <h3 class="text-center text-info mt-5">User Data</h3>
                            <div class="col-md-8 mt-5 offset-2">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                           <td>ID</td> 
                                           <td>Name</td>
                                           <td>Date of Birth</td>
                                           <td>Email</td>
                                           <td>Password</td>
                                        <tr>
                                    </thead>
                                    <tbody >
                                    <?php 
                    
                                                include 'conn.php';

                                                 $limit = 3;
                                                
                                                  
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
                                            <td class="table-info"><?php echo $row['id']?></td>
                                            <td class="table-danger"><?php echo $row['name']?></td>
                                            <td class="table-primary"><?php echo $row['dob']?></td>
                                            <td class="table-success" ><?php echo $row['email']?></td>
                                            <td class="table-secondary"><?php echo $row['passwords']?></td>
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
                                        echo '<li class="page-item"><a class="page-link" href="view.php?page='.($page-1).'">Prev</a> </li>';
                                      }
                                    for($i = 1; $i <=$total_page ; $i++ ){
                                      
                                    
                                        ?>
                                        <li class="page-item ">
                                            <a class="page-link <?php if($page == $i){ echo 'active'; } ?>" href="view.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
                                     <?php
                                    }
                                    if($total_page > $page ){
                                        echo '<li class="page-item"><a class="page-link" href="view.php?page='.($page + 1).'">Next</a> </li>';
                                      }
                                    echo " </ul>";

                                   }
                                 ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
                    
                </body>
                </html>




