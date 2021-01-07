<?php 
include('config.php');
$errors = array(); // Initialize an error array. #2

	// Check for a first name:                        #3
		$first_name = trim($_POST['f_name']);
	if (empty($first_name)) {
		$errors[] = 'You forgot to enter your first name.';
	}
	// Check for a last name:
		$last_name = trim($_POST['l_name']);
	if (empty($last_name)) {
		$errors[] = 'You forgot to enter your last name.';
	}
	// Check for an email address:
		$email = trim($_POST['email']);
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email address.';
    }
    $sql1="select * from users where email='$email'";
    $result=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0){
        $errors[] = 'Your email address already used.';
    }
	// Check for a password and match against the confirmed password:
			$password1 = trim($_POST['password1']);
			$password2 = trim($_POST['password2']);
	if (!empty($password1)) {
		if ($password1 !== $password2) { //#4
			$errors[] = 'Your two password did not match.';
		} 
	} else {
		$errors[] = 'You forgot to enter your password.';
    }
    
    if (empty($errors)) {
    //hashing the password
    $hash= password_hash($password1, PASSWORD_DEFAULT); #hash work ok
    //generate randomstrin
    include('random.php');
    $randstring=generateRandomString();
    //execute query
    $sql="insert into users(first_name, last_name, email, password, registration_date, activation_code)
    VALUES ('$first_name','$last_name','$email', '$hash', CURRENT_DATE, '$randstring')";
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
        $sql1="select userid from users where email='$email'";
        $result=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result)>0){
            $id=mysqli_fetch_assoc($result);
        }   
        require 'mailer/PHPMailerAutoload.php';  
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 3;                                  // Enable verbose debug output  
        $mail->isSMTP();                                       // Set mailer to use SMTP  
        $mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
        $mail->SMTPAuth = true;                                // Enable SMTP authentication  
        $mail->Username = 'vanha.pham2803@gmail.com';               // your SMTP username  
        $mail->Password = 'phamvanha60th4';                      // your SMTP password  
        $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
        $mail->Port = 587;                                     // TCP port to connect to  
        $mail->setFrom('vanha.pham2803@gmail.com', 'Nuke Handa');  
        $mail->addAddress($email);                             // set your BCC email address  
        $mail->isHTML(true);                                   // Set email format to HTML  
        $mail->Subject = 'How to send email from localhost using php with mysqli';  
        $mail->Body  = '<h1>Welcome to NukeHanda.net</h1><h3>Dear '.$first_name.' '.$last_name.'</h3>';
        $mail->Body  .= '<p>Thank you for signing up to NukeHanda.net. <br>We just need you to confirm your email address and finish setting up a new  account we created just for you. <br>You can do it super-quickly by clicking follow link:</p>';
        $mail->Body  .= '<b style="color: blue; text-decoration:none;"> click here http://localhost/prac-login-regis/activate.php?userid='.$id['userid'].'&code='.$randstring.' </b>';  
        if($mail->send()) {  
        echo 'Message has been sent';  
        } else {  
        echo 'Message could not be sent';  
        }  
        header("Location:register-thank.php");
     }
     else{
         $e= mysqli_error($conn);
        header("Location:error.php?error=$e");
     }
    }else { // Report the errors.                                            #13
		$errorstring = "Error! <br /> The following error(s) occurred:<br>";
		foreach ($errors as $msg) { // Print each error.
			$errorstring .= " - $msg<br>";
		}
		$errorstring .= "Please try again.<br>";
        header("Location:error.php?error=$errorstring");
		}// End of if (empty($errors)) IF.






?>