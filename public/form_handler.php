<?php
if (isset($_POST['submit'])) {


                $name=$_POST['name'];
                $visitor_email=$_POST['email'];
                $subject=$_POST['subject'];
                $message=$_POST['message'];
}

$to='fadhilisam23@gmail.com';
$email_from='info@uniweb-7b6d9.web.app';
$email_subject='New Form Submission';

$email_body="User Name: $name.\n". 
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n";


$headers="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$subject,$message,$headers);
header("Location: response.php");
