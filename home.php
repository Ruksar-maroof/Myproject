<?php  
session_start();
$id=$_SESSION['id'];
    $name=$_SESSION['name'];
    $photo=$_SESSION['photo'];
   /*if($name=="")
{
  echo "<script>window.location='loginu.php';</script>";
}*/
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud Based Student Study Material</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                <a class="nav-link active  custom-txt fw-bold" aria-current="page" href="admin/academics1.php">Academics</a>
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
       <div class=" bg-primary py-3 mx-5  my-3 text-center text-white h2">Profile</div>
       </header>
       <div class="container my-5 ">
        <div class="row">
            <div class="col-md-4 py-5 border offset-md-4">
           <img src="profile/<?php echo $photo ?>" class="img-fluid rounded-circle mx-auto d-block" height="200" width="200">
           <h3 class="text-center"><?php echo $name ?></h3>
           <a href='logoutu.php'>
            <button type="button" class="btn btn-primary ">Logout</button>
           </a>
           <a href='updateregisteru.php?id=<?php echo $id ?>'>
            <button type="button" class="btn btn-primary">Update</button>
           </a>
            </div><!----col md 4--->

        </div><!---row-->
       </div><!---container--->
       <footer class="bg-black text-center text-white py-2 fw-bold">
  &copy2023 Designed by Ruksar Sariya
</footer>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>