<?php include 'index.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" sizes="16x16" href="image/img4.jpg">
  <title>Admin Panel</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body id="page-top">
<header>
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminpanel.php">
        <div class="sidebar-brand-text mx-3">Library Admin</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="adminpanel.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="bookupload.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Book Upload</span>
        </a></li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="bdetails.php" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-cog"></i>
          <span>Book Delete</span>
        </a></li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        DataBase
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="regtab.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Register Details</span>
        </a></li>
        <li class="nav-item">
        <a class="nav-link collapsed" href="bdetails.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Book Details</span>
        </a></li>
        <!-- Add Admin -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="addadmin.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Add Admin</span>
        </a></li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Log Out</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Topbar Search -->
     <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search...." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div class="logo">
         LIBRARY<b style="color:blue;">ZONE</b>
      </div>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="adminpanel.php">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="image/img4.jpg">
              </a>
            </li>
          </ul>
        </nav>
         <!-- Show Admin Details -->
      <center>
        <h3>Admin Details</h3>
        <table border=1px>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
        </tr>
        <?php foreach($ad as $a){?>
        <tr>
            <td><?=$a['id']?></td>
            <td><?=$a['Name']?></td>
            <td><?=$a['pass']?></td>
            <td><form action="index.php" method="post">
                <input type="hidden" name="id" value="<?=$a['id']?>">
                <input type="submit" value="DELETE" name="del" >
                </form>
            </td>
        </tr>
        <?php } ?>
        </table>
        </center><br><br>
        <center><font color="red">
          <h2>Add Admin</h2><br>
        </font>
        <form action="index.php" name="contactForm" onsubmit="return validateForm()" method="post">
        <div class="field_wrap">
            <font color="black">
                <label>Admin Name:</label>
            </font>
            <input type="text" name="fname" placeholder="Enter Admin Name" autocomplete="off">
            <div id="username_txt"></div>
        </div>
        <div class="field_wrap">
            <font color="black">
            <label>Passsword:</label>
            </font>
            <input type="Password" name="fpassword" placeholder="Enter Passsword" autocomplete="off"><br><br>
            <font color="black">
            <label>Re-enter Password:</label>
          </font>
           <input type="password" name="rePassword" placeholder="Enter Re-password" autocomplete="off">
            <div id="password_txt"></div> 
        </div>
        <input type="submit" value="Add" class="submit" name="add">
        </form></center> 
 

      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Thank You Form Library Zone</span>
          </div>
        </div>
      </footer>
    </div>
  </div>
  </div>
    
</header>
<footer>
    <div class="down">
            <font color="white">
            <br><br><br><h3>Stay Connected</h3>
            </font>
            <a href="https://www.facebook.com/" class="fa fa-facebook" style="text-decoration: none; padding: 10px 12px;color: white; "></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
            <a href="https://twitter.com/i/flow/login" class="fa fa-twitter" style="text-decoration: none; padding: 10px 12px;color: white;"></a><br>
            <a href="#" class="fa fa-phone" style="text-decoration: none; padding: 10px 12px;color: white;">
              +91-9635399014</a> 
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJTNqrgnGwVtVpsZhQBWNnSMlJdfzgVdTXfRFSjBJJdpMGGdqWjFrPBGlFnJRHdqrtXBfcg" class="fa fa-envelope" style="text-decoration: none; padding: 10px 12px; color:white;">
              milanhalder9183@gmail.com</a>
    </div>
<div class="footer">
<div class="copyright text-center my-auto">
    <span>Copyright &copy; Milan 2022</span></div>
</div>
</footer>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script src="js/customaa.js"></script>
<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>