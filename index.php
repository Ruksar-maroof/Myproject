
<?php
$a=mysqli_connect('localhost','root','','cbssm');
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $course=$_POST['course'];
    $sem=$_POST['sem'];
    $category=$_POST['category'];
    $dname=$_POST['dname'];
    $durl=$_POST['durl'];
    $updatedby=$_POST['updatedby'];
    $ins="insert into academics(course,sem,category,dname,durl,updatedby,datetime) values
    ('$course','$sem','$category','$dname','$durl','$updatedby',now())";
 // echo $ins;
   
    $status=mysqli_query($a,$ins);
    if($status)
    {
        echo"<script>alert('Successfully Inserted');
        window.location='admin/academics.php';</script>";
    }
    else
    {
        echo"<script>alert('Fail');
        window.location='admin/academics.php';</script>";
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
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/23421.jpg"height="600" width="3168"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/6709.jpg" height="600" width="3168"class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/v4cn_xkxp_220204.jpg"height="600" width="3168" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><!---end of slide-->
<div class="container-fluid bgc  p-3 ">
<div class="container ">
    <div class="row">
    <?php
     $get="select * from book";
    $everything=mysqli_query($a,$get);

    while($pic=mysqli_fetch_array($everything)){
      $bname=$pic['bname'];
      $bphoto=$pic['bphoto'];
      $burl=$pic['burl'];
    echo"<div class='col-md-3'>
    <div class='p-4 bg-light  my-3 border'>
      <img src='admin/profile/$bphoto'class='image-fluid px-3 mx-auto d-block' height='150'width='150'>
      <h3 class='text-center'>$bname</h3>
      <button class='btn btn-primary mx-auto d-block'><a style='color:white;' href=$burl>Download</a></button>
   </div>
    </div> ";
      }
        ?>
     
        
    </div><!--row-->
 </div><!--container-->
</div><!--confluid-->

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="images/12982910_5124556.jpg" height="500" width="500">
      </div>
      <div class="col-md-6"><!---contact page-->        
      <h1>Contact</h1><br>
        <form action="insert.php" method="post">
          <div class="mb-3">
           
            <input type="text" name="name" required placeholder="Enter your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           
          </div>
          <div class="mb-3">
            
            <input type="text" name="email" required   placeholder="Enter your Email" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            
            <input type="text" name="contact" required   placeholder="Enter your Contact No" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <textarea placeholder="Message" name="message" required  class="form-control" id="exampleInputPassword1"></textarea>
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