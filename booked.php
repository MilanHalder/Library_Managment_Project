<?php include 'index.php'; 
session_start();
$n=$_SESSION['n'];
$i=$_SESSION['i'];
$bi=getBookItem($i);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" sizes="16x16" href="image/img4.jpg">
  <title>Booked_Items</title>
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>

<div class="top">
    <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount=-40 behavior="alternate" direction="right">
        <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJTNqrgnGwVtVpsZhQBWNnSMlJdfzgVdTXfRFSjBJJdpMGGdqWjFrPBGlFnJRHdqrtXBfcg" class="fa fa-envelope" style="text-decoration:none;  color:white;">
            milanhalder9183@gmail.com</a>
        <a href="#" class="fa fa-phone" style="text-decoration:none;  color:white;">
            +91-9635399014</a>
            
            <a href="https://www.facebook.com/" class="fa fa-facebook" style="text-decoration:none; padding:8px;  color:white;"></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram" style="text-decoration:none; padding:8px; color:white;"></a>
            <a href="https://twitter.com/i/flow/login" class="fa fa-twitter" style="text-decoration:none;  padding: 8px ;color:white;"></a>
            <b style="color:red;">LIBRARY </b><b style="color:white;">ZONE</b>
    </marquee>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <div class="New_E">
            <h1><b style="color:white;padding:0px 30px;"></b><b style="color:red;">LIBRARY </b><b style="color:blue;">ZONE</b><b style="color:white;padding:0px 45px;"></b></h1>
            </div>
              </li></ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="disp.php"><button type="button" class="btn btn-outline-success">Back</button></a>
              </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="regi.php"><button type="button" class="btn btn-outline-primary">About</button></a>
              </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <div class="New_E">
                <a href="#"><button type="button" class="btn btn-danger">Booked</button></a>
                </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="admin.php"><button type="button" class="btn btn-outline-dark">Log Out</button></a>
              </div>
              </li>
            </ul>
            <form class="d-flex">
            <div class="New_E">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </div>
              <div class="New_E">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
            </form>
          </div>
        </div>
      </nav>
        <center>
        <table border=1px>
        <tr>
            <th>ID</th>
            
            <th>Booked Item</th>
            <th>Action</th>
        </tr>
        <?php foreach($bi as $a){ $i=0;?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$a['Bname']?></td>
            <td><form action="index.php" method="post">
                <input type="hidden" name="id" value="<?=$a['id']?>">
                <input type="submit" value="DELETE" name="dlbi" >
                </form>
            </td>
        </tr>
        <?php   }?>
        </table>
        </center>
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
<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>