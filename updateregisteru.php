<?php
$con=mysqli_connect('localhost','root','','cbssm');
if($_SERVER['REQUEST_METHOD']=="GET")
{
    $id=$_GET['id'];
    $rec="select * from register where id='$id'";
    $secrec=mysqli_query($con,$rec);
    $records=mysqli_fetch_array($secrec);
    $id=$records['id'];
    $name=$records['name'];
    $contact=$records['contact'];
    $gender=$records['gender'];
    $state=$records['state'];
    $email=$records['email'];
    $password=$records['password'];
    $photo=$records['photo'];
}
?>
<?php
$con=mysqli_connect('localhost','root','','cbssm');
if($_SERVER['REQUEST_METHOD']=="POST")
{
  //posting values
  $id=$_POST['id'];
    $name=$_POST['name'];
   $contact=$_POST['contact'];
   $gender=$_POST['gender'];
   $state=$_POST['state'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $photo=$_FILES['photo']['name'];
   move_uploaded_file($_FILES['photo']['tmp_name'],"profile/$photo");
   //inserting the table using sql quaries
$up="update register set name='$name',contact='$contact',gender='$gender',state='$state',email='$email',password='$password',photo='$photo',datetime=now() where id='$id'"; 

 echo $up;
$status=mysqli_query($con,$up);
if($status)
{
 echo"<script>alert('Successfully updated');
   window.location='home.php';</script>";
}
else
{
  echo"<script>alert('fail');
  window.location='updateregisteru.php';</script>";
} 
}

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
       <div class="container my-5 ">
        <div class="row">
        <header>
       <div class=" bg-primary py-3 mx-5 text-center my-1 text-white h2">Update</div>
       </header>
            <div class="col-md-4 border offset-md-4">
      
            <form method="post" action="" enctype="multipart/form-data">
            <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name ?>"  required id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contact No</label>
    <input type="number" class="form-control" name="contact" value="<?php echo $contact ?>"  required id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="male" value="Male"<?php if($gender=="male") {?> checked<?php }?> id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"name="gender" value="female" value="female"<?php if($gender=="female") {?> checked<?php }?> id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">State</label>
    <select class="form-select"name="state" required aria-label="Default select example">
  <option selected>----Select State---</option>
  <option value="Karnataka"<?php if($state=="Karnataka") {?> selected<?php }?>>Karnataka</option>
  <option value="Andhrapradesh"<?php if($state=="Andhrapradesh") {?> selected<?php }?>>Andhrapradesh</option>
  <option value="Telangana"<?php if($state=="Telangana") {?> selected<?php }?>>Telangana</option>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email"required  value="<?php echo $email ?>"  id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value="<?php echo $password ?>" required  id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Photo</label>
    <input type="file" class="form-control" name="photo" required id="exampleInputPassword1">
    <img src="profile/<?php echo $photo?>" width="50" height="50">
  </div>
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </div><!----col md 4--->

        </div><!---row-->
       </div><!---container--->
       <footer class="bg-black text-center text-white py-2 fw-bold">
  &copy2023 Designed by Ruksar Sariya
</footer>