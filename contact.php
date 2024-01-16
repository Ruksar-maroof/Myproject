<?php
$a=mysqli_connect('localhost','root','','cbssm');
if($_SERVER['REQUEST_METHOD']=="POST")
{

    $secretKey = '6LeewtckAAAAAM6O_zJYQWccoIkV_4QLzyS6PsoC';
        $captcha = $_POST['g-recaptcha-response'];

        if(!$captcha){
          echo '<script>alert("Please check the the captcha");
		  window.location="javascript:history.go(-1)";
		  </script>';
          exit;
        }
    $cname=$_POST['cname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $message=$_POST['message'];
    $ins="insert into enquiry(cname,email,contact,message,datetime) value('$cname','$email','$contact','$message',now())";
  // echo $ins;
   
    $status=mysqli_query($a,$ins);
    if($status)
    {
        echo"<script>alert('Successfully Inserted');
        window.location='index.php';</script>";
    }
    else
    {
        echo"<script>alert('Fail');
        window.location='index.php';</script>";
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud Based Student Study Material</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
  <body>
     
    <header class="bg sticky-top">
        <div class="container">
         <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand text fw-bold" href="#"><img src="images/STUDY-removebg-preview.png"height="100" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  bg-white"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mx-auto mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active  custom-txt  fw-bold" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active custom-txt fw-bold" aria-current="page" href="registeru.php" >Register</a>
              </li>
              <li class="nav-item ">
                
                 <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn text-white custom-text fw-bold dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  Courses
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">BCA</a></li>
    <li><a class="dropdown-item" href="#">BBM</a></li>

    
  </ul>
</div>
              </li>
              <li class="nav-item">
                <a class="nav-link active  custom-txt fw-bold" aria-current="page" href="academics1.php">Academics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active  custom-txt fw-bold" aria-current="page" >About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active  custom-txt fw-bold" aria-current="page" href="contact.php">Contact</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active custom-txt fw-bold" aria-current="page" href="admin/login.php" >Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active custom-txt fw-bold px-5 " aria-current="page" href="loginu.php" >Login</a>
              </li>
            </ul>
         </div>
    </div>
</nav>
</div>
</header><!---End of header-->

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="images/12982910_5124556.jpg" height="500" width="500">
      </div>
      <div class="col-md-6"><!---contact page-->        
      <h1>Contact</h1><br>
        <form action="" method="post">
          <div class="mb-3">
           
            <input type="text" name="cname" required  placeholder="Enter your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           
          </div>
          <div class="mb-3">
            
            <input type="text" name="email" required  placeholder="Enter your Email" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            
            <input type="text" name="contact" required  placeholder="Enter your Contact No" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <textarea placeholder="Message" name="message" required class="form-control" id="exampleInputPassword1"></textarea>
          </div>
          <div class="g-recaptcha" data-sitekey="6LcQYiAmAAAAAMTjbNqe3Rj7DI1mRA90xBfAphzi"></div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div><!--row-->
  </div><!--container-->
</div><!--cf-->
<footer class="bg-black text-center text-white py-2 fw-bold">
  &copy2023 Designed by Ruksar Sariya
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>