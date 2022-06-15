<?php
$con=mysqli_connect('127.0.0.1:3307','root','','vision_consultancy');
$full_name=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$service=$_POST['service'];
$message=$_POST['message'];
$return_message;



// Database insert into sql

$sql="insert into `general_enquiry` (`full_name`,`email`,`phone`,`course_type`,`message`) values('$full_name','$email','$phone','$service','$message')";

// insert into database
$rs=mysqli_query($con,$sql);
if($rs)
{
    echo("User Record Saved");
    $to_mail = "ramk90806@gmail.com";
    $subject = "Php Mail Testing";
    $body ="$full_name,$email,$phone,$service,$message";
   $headers ="From: rkservice345@gmail.com";

  $mail_sent= mail( $to_mail,$subject,$body,$headers);
   $mail_sent=true;
    if($mail_sent == true)
    {
        
        echo '<script type="text/JavaScript"> 
        alert("Data Saved Successfully");
        </script>';
        header('Location: ../index.html');
        }

     else{
         echo("Mail Send Failed ");
    }

    

}
else{
    echo("there is some error ");
}
// echo("Details   '$full_name','$email','$phone','$service','$message'");

?>