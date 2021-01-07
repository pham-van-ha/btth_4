<?php

$tieude=$_POST['tieude'];
$noidung=$_POST['noidung'];
$email=$_POST['email'];

require 'mailer/PHPMailerAutoload.php';  
$mail = new PHPMailer(true);
$mail->SMTPDebug = 3;                                  // Enable verbose debug output  
$mail->isSMTP();                                       // Set mailer to use SMTP  
$mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
$mail->SMTPAuth = true;                                // Enable SMTP authentication  
$mail->Username = 'vanha.pham2803@gamil.com';               // your SMTP username  
$mail->Password = 'phamvanha60th4';                      // your SMTP password  
$mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
$mail->Port = 587;                                     // TCP port to connect to  
$mail->setFrom('vanha.pham2803@gmail.com', 'phamvanha');  
$mail->addAddress($email);                             // set your BCC email address  
$mail->isHTML(true);   
$mail->Subject = $tieude;  
$mail->Body  = '<h1>Thankyou for contact</h1>';
$mail->Body="<p>we received your messenger:</p> <br> <b>";
$mail->Body  .= $noidung;
$mail->Body  .= "</b><br> <p>vanha.pham2803.net</p>";
if($mail->send()) {  
echo 'Message has been sent';  
} else {  
echo 'Message could not be sent';  
}  
header("Location:register-thank.php");
?>