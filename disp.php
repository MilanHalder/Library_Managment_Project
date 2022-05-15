<?php include 'index.php';
$f=getIMG();
session_start();
$n=$_SESSION['n'];
if(empty($n)){
     header("location:logi.php");
}
else{
?>
<!-- print Name -->

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" sizes="16x16" href="image/img4.jpg">
  <title>Library Management System</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <a href="#"><button type="button" class="btn btn-danger">Home</button></a>
              </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="#"><button type="button" class="btn btn-outline-primary">About</button></a>
              </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="booked.php"><button type="button" class="btn btn-outline-success">Booked Item </button></a>
              </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="logi.php"><button type="button" class="btn btn-outline-dark">Log out</button></a>
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

      <div class="body">
            <b><h1>WELCOME </b><b style="color:red;">LIBRARY </b><b style="color:blue;">ZONE </b><b style="color:green;"><?=$n?></b> </h1>
            <p>Here suggested some Book for you</p>
      </div>

  <div class="row row-cols-1 row-cols-md-5 g-4">
  <?php foreach ($f as $i){?>
  <div class="col">
    <div class="card h-100">
    <div class="New_E">
      <img src="upload/<?=$i['Uimage']?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$i['Bname']?></h5>
        <p class="card-text"><b style="color:blue;"><?=$i['Aname']?></b><br><?=$i['Des']?><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic labore ut sed optio.</p>
<a class="btn btn-info" href="index.php?book_id=<?=$i['id']?>&user_id=<?=$_SESSION['i']?>">Booked</a>
    </div>
      </div>
    </div>
  </div>
<?php } ?>

</div>

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
        <div class="footer"> Developed By : Milan Copyright &copy; </div>
    </footer>

</header>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
<?php }
// session_destroy();
?>


