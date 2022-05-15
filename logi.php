<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" sizes="16x16" href="image/img4.jpg">
  <title>Library Login</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/stylelog.css">
</head>
<body>
<header>
<div class="b_col">
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
                <a href="Front.php"><button type="button" class="btn btn-outline-primary">Home</button></a>
              </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="regi.php"><button type="button" class="btn btn-outline-success">Registration</button></a>
              </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <div class="New_E">
                <a href="logi.php"><button type="button" class="btn btn-danger">Student Login</button></a>
                </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="admin.php"><button type="button" class="btn btn-outline-info">Admin Login</button></a>
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
      
      <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(image/img6.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
                <div class="New_E">
			      			<h3 class="mb-4">Sign In</h3>
                </div>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="https://www.facebook.com/" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="https://twitter.com/i/flow/login" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.instagram.com/" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
									</p>
								</div>
			      	</div>
              <form action="index.php" class="signin-form" name="contactForm" onsubmit="return validateForm()" method="post">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" name="fname" placeholder="Username" autocomplete="off">
                  <div id="username_txt"></div>
			      		</div>
                <div class="form-group mb-3">
		            	<label class="label" for="password">Email</label>
		              <input type="email" class="form-control" name="femail" placeholder="Email" autocomplete="off">
                  <div id="email_txt"></div> 
		            </div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" name="fpassword" placeholder="Password" autocomplete="off">
                  <div id="password_txt"></div> 
		            </div>
		            <div class="form-group">
                <div class="New_E">
                  <input type="submit" class="form-control btn btn-success rounded submit px-3"value="login" class="submit" name="login">
                </div>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a href="regi.php">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
<div>
<footer>
        <div class="down">
            <h3 style="color:white;padding:30px;">Stay Connected</h3>
            <a href="https://www.facebook.com/" class="fa fa-facebook" style="text-decoration: none; padding: 10px 12px;color: white; "></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
            <a href="https://twitter.com/i/flow/login" class="fa fa-twitter" style="text-decoration: none; padding: 10px 12px;color: white;"></a><br>
            <a href="#" class="fa fa-phone" style="text-decoration: none; padding: 10px 12px;color: white;">
              +91-9635399014</a> 
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJTNqrgnGwVtVpsZhQBWNnSMlJdfzgVdTXfRFSjBJJdpMGGdqWjFrPBGlFnJRHdqrtXBfcg" class="fa fa-envelope" style="text-decoration: none; padding: 10px 12px; color:white;">
              milanhalder9183@gmail.com</a>
              <h6 style="color:blue;">Privacy Policy</h6>
        </div>
        <div class="footer"> Developed By : Milan Copyright &copy; </div>
    </footer>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/customl.js"></script>
</body>
</html>