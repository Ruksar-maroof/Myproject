<?php
session_start();
error_reporting(0);
$name=$_SESSION['name'];
// if($name!="")
// {
// echo "<script>window.location='home.php';</script>";
// }

$dbs=mysqli_connect('localhost','root','','cbssm');
if($_SERVER['REQUEST_METHOD']=="POST")
{

  $email=$_POST['email'];
  $password=$_POST['password'];
  echo $email;
  echo $password;
  $sel="select * from register where email='$email' and password='$password'";
  echo $sel;
  $status=mysqli_query($dbs,$sel);
  $count=mysqli_num_rows($status);

  echo $count;
  if($count!="0")
{
  $row=mysqli_fetch_array($status);
  $name=$row['name'];
  $photo=$row['photo'];
  $id=$row['id'];
  $_SESSION['name']=$name;
  $_SESSION['photo']=$photo;
  $_SESSION['id']=$id;


    echo"<script>alert('successfully Login');
    window.location='home.php';
    </script>";
 }
 else
 {
    echo"<script>alert('Invalid email and password');
    window.location='loginu.php';
    </script>";
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud Based Student Study Material</title> 
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
  <body>
  <header class="bg sticky-top">
        <div class="container">
         <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand text fw-bold" href="#"><img src="images/STUDY-removebg-preview.png" height="100" width="100"></a>
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
                <a class="nav-link active  custom-txt fw-bold" aria-current="page" href="contact.php" >Contact</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active custom-txt fw-bold" aria-current="page" href="login.php" >Admin</a>
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
<header>
       <div class=" bg-primary py-3 mx-5 my-3 text-center text-white h2">LOGIN</div>
       </header>
  <div class="container-fluid ">
    <div class="container my-5 ">
      <div class="row">
        <div class="col-md-4 border offset-md-4">
        <form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"  required class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>
<p><a href="registeru.php">click here</a>to register</p>
<!-- <p><a href="register.php">click here</a> to Register</p> -->
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-black text-center text-white py-2 fw-bold">
  &copy2023 Designed by Ruksar Sariya
</footer>

  </body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  </html>