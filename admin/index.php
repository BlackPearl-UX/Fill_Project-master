<?php
   session_start();
   if(!isset($_SESSION['username'])){
       header('location:login/');
   }
   include('../include/db.php');
   $query="SELECT * FROM admin_users";
   $queryrun=mysqli_query($db,$query);
   $data=mysqli_fetch_array($queryrun);
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v4.0.1">
      <title>Admin Panel</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
      <!-- Bootstrap core CSS -->
      <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
      <style>
         .oo{
         height: 200px;
         }
         .ooo{
         height: 100px;
         }
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         }
         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
         font-size: 3.5rem;
         }
         }
      </style>
      <!-- Custom styles for this template -->
      <link href="css/dashboard.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
         <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Hye, <?=$_SESSION['username']?></a>
         <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
               <a class="nav-link" href="php/logout.php">Logout</a>
            </li>
         </ul>
      </nav>
      <div class="container-fluid">
         <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
               <div class="sidebar-sticky pt-3">
                  <ul class="nav flex-column">
                     <li class="nav-item">
                        <a class="nav-link" href="?editportfolio=true">
                        <span data-feather="archive"></span>
                        Edit Portfolio
                        </a>
                     </li>
                  </ul>
                  <ul class="nav flex-column mb-2">
                     <li class="nav-item">
                        <a class="nav-link" href="?editprofile=true">
                        <span data-feather="user"></span>
                        Edit Profile
                        </a>
                     </li>
                  </ul>
               </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
               <?php
                  if(isset($_GET['editportfolio'])){ 
                  include('php/portfolio.php');
                  }else if(isset($_GET['editprofile'])){ ?>
               <h2>Edit Profile</h2>
               <?php
                  if(isset($_GET['msg'])){
                      
                  if($_GET['msg']=='updated'){
                  ?>
               <div class="alert alert-success text-center" role="alert">
                  Successfully Updated !
               </div>
               <?php
                  }  
                  } 
                  ?> 
               <form method="post" action="php/uprofile.php">
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="ptitle">Name</label>
                        <input type="text" name="username" value="<?=$data['username']?>" class="form-control" id="ptitle" placeholder="Monu Giri">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="psubtitle">Password</label>
                        <input type="text" name="userpass" value="<?=$data['user_pass']?>" class="form-control" id="psubtitle" placeholder="*************">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="psubtitle">Email Id</label>
                        <input type="text" name="userid" value="<?=$data['user_id']?>" class="form-control" id="psubtitle" placeholder="admin@admin.com">
                     </div>
                  </div>
                  <input type="submit" name="uprofile" class="btn btn-primary" value="Save Changes">
               </form>
               <?php }else{
                  include('php/welcome.php');
                  } ?>
            </main>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
      <script src="js/dashboard.js"></script>
   </body>
</html>