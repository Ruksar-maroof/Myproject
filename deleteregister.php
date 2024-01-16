<?php  
$con=mysqli_connect('localhost','root','','cbssm');
if($_SERVER['REQUEST_METHOD']=="GET")
{
    $id=$_GET['id'];
    $del="delete from register where id='$id'";
    echo $del;
    
}
$status=mysqli_query($con,$del);
if($status)
{
    echo"<script>alert('Successfully deleted');
    window.location='registerdb.php';</script>";
}
else{
    echo"<script>alert('Not deleted');
    window.location='registerdb.php';</script>";
}
?>