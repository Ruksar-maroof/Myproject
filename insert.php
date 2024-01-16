


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
 echo $ins;
   
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