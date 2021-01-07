<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$userid = $first_name = $last_name = $email= $password= $registration_date= $user_leve= $class= $address1= $address2= $city= $state_country= $zocde_pcode= $phone= $paid/*= $status= $activation_code*/= $avatar= "";
$userid_err = $first_name_err = $last_name_err = $email_err= $password_err= $registration_date_err= $user_leve_err= $class_err= $address1_err= $address2_err= $city_err= $state_country_err= $zocde_pcode_err= $phone_err= $paid_err= /*$status_err= $activation_code_err=*/ $avatar_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Validate first_name
        $input_first_name = trim($_POST["first_name"]);
        if(empty($input_first_name)){
            $first_name_err = "vui lòng nhập tên đầu.";
        } elseif(!filter_var($input_first_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $first_name_err = "Không hợp lệ.";
        } else{
            $first_name = $input_first_name;
        }
        // Validate last_name
        $input_last_name = trim($_POST["last_name"]);
        if(empty($input_last_name)){
            $last_name_err = "vui lòng nhập tên.";
        } elseif(!filter_var($input_last_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $last_name_err = "Không hợp lệ.";
        } else{
            $last_name = $input_last_name;
        }
         // email
        $input_email = trim($_POST["email"]);
        if(empty($input_email)){
            $email_err = "vui long nhap emai.";     
        } else{
            $email = $input_email;
        }

        // password
        $input_password = trim($_POST["password"]);
        if(empty($input_password)){
            $password_err = "vui long nhap mk.";     
        } else{
            $password = $input_password;
        }
        // 	registration_date
        $input_registration_date = trim($_POST["registration_date"]);
        if(empty($input_registration_date)){
            $registration_date_err = "vui long nhap registration_date.";     
        } else{
            $registration_date = $input_registration_date;
        } 
        // 	user_leve
        $input_user_leve = trim($_POST["user_leve"]);
        if(empty($input_user_leve)){
            $user_leve_err = "vui long nhap user_leve.";     
        } else{
            $user_leve = $input_user_leve;
        }
        // 	class
        $input_class= trim($_POST["class"]);
        if(empty($input_class)){
            $user_class = "vui long nhap class.";     
        } else{
            $class = $input_class;
        } 
        // Validate address1
        $input_address1 = trim($_POST["address1"]);
        if(empty($input_address1)){
            $address1_err = "Please enter an address1.";     
        } else{
            $address1 = $input_address1;
        }
        // Validate address
        $input_address2 = trim($_POST["address2"]);
     if(empty($input_address2)){
         $address2_err = "Please enter an address2.";     
        } else{
            $address2 = $input_address2;
        }
        
        // Validate city
        $input_city = trim($_POST["city"]);
        if(empty($input_city)){
            $city_err = "xin long nhap ten thanh pho.";     
        } elseif(!ctype_digit($input_city)){
            $city_err = "sai ten thanh pho.";
        } else{
            $city = $input_city;
        }
        // Validate state_country
        $input_state_country = trim($_POST["state_country"]);
        if(empty($input_state_country)){
            $state_country_err = "Please enter an state_country.";     
        } else{
            $state_country = $input_state_country;
        }
        // Validate zocde_pcode
        $input_zocde_pcode = trim($_POST["zocde_pcode"]);
        if(empty($input_zocde_pcode)){
            $zocde_pcode_err = "Please enter an zocde_pcode.";     
        } else{
            $szocde_pcode = $input_zocde_pcode;
        }

        // Validate phone
        $input_phone = trim($_POST["phone"]);
        if(empty($input_phone)){
            $phone_err = "Please enter phone.";     
        } else{
            $phone = $input_phone;
        }

         // Validate 	paid
         $input_paid = trim($_POST["paid"]);
         if(empty($input_paid)){
             $paid_err = "Please enter 	paid.";     
         } else{
             $paid = $input_paid;
         }

        // Validate 	status
        $input_status = trim($_POST["status"]);
        if(empty($input_status)){
            $status_err = "Please enter status.";     
        } else{
            $status = $input_status;
        }
        // Validate 	activation_code
        $input_activation_code = trim($_POST["activation_code"]);
        if(empty($input_activation_code)){
            $activation_code_err = "Please enter activation_code.";     
        } else{
            $activation_code = $input_activation_code;
        }

       // Validate 		avatar
        $input_avatar = trim($_POST["avatar"]);
        if(empty($input_avatar)){
            $avatar_err = "Please enter 	avatar.";     
        } else{
            $avatar = $input_avatar;
        }
         // Check input errors before inserting in database
        if(empty($first_name_err) && empty($last_name_err) && empty($email_err) && empty($password_err) && empty($registration_date_err) && empty($user_level_err) && empty($class_err) && empty($address1_err) && empty($address2_err) && empty($city_err) && empty($state_country_err) && empty($zocde_pcode_err) && empty($phone_err) && empty($paid_err) && empty($status_err) && empty($activation_code_err) && empty($avatar_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, first_name, last_name, email, password, registration_date, user_leve, user_leve, address1, address2, city, state_country, zocde_pcode, phone, paid, status, activation_code, avatar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_first_name, $param_last_name, $param_email, $param_password, $param_registration_date, $param_user_leve, $param_address1, $param_address2, $param_city, $param_state_country, $param_zocde_pcode, $param_phone, $param_paid, $param_status, $param_salary, $param_activation_code, $param_avata);
            
            // Set parameters
            $param_first_name= $first_name;
            $param_last_name = $last_name;
            $param_email = $email;
            $param_password = $password;
            $param_registration_date = $registration_date;
            $param_user_leve = $user_leve;
            $param_class = $class;
            $param_address1 = $address1;
            $param_address2 = $address2;
            $param_city = $city;
            $param_state_country = $state_country;
            $param_zocde_pcode = $zocde_pcode;
            $param_phone = $phone;
            $param_paid = $paid;
            $param_status = $status;
            $param_activation_code = $activation_code;
            $param_avatar = $avatar;
            
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>">
                            <label>first_name</label>
                            <input type="text" first_name="first_name" class="form-control" value="<?php echo $first_name; ?>">
                            <span class="help-block"><?php echo $first_name_err;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>">
                            <label>last_name</label>
                            <input type="text" first_name="last-name" class="form-control" value="<?php echo $last_name; ?>">
                            <span class="help-block"><?php echo $last_name_err;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>email</label>
                            <input type="text" email="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label>password</label>
                            <input type="text" password="password" class="form-control" value="<?php echo $password; ?>">
                            <span class="help-block"><?php echo $password_err;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($user_leve_err)) ? 'has-error' : ''; ?>">
                            <label>user_leve</label>
                            <input type="text" user_leve="user_leve" class="form-control" value="<?php echo $user_leve; ?>">
                            <span class="help-block"><?php echo $user_leve;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($class_err)) ? 'has-error' : ''; ?>">
                            <label>class</label>
                            <input type="text" class="class" class="form-control" value="<?php echo $class; ?>">
                            <span class="help-block"><?php echo $class;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($address1_err)) ? 'has-error' : ''; ?>">
                            <label>address1</label>
                            <input type="text" address1="address1" class="form-control" value="<?php echo $address1; ?>">
                            <span class="help-block"><?php echo $address1;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($address2_err)) ? 'has-error' : ''; ?>">
                            <label>address2</label>
                            <input type="text" address2="address2" class="form-control" value="<?php echo $address2; ?>">
                            <span class="help-block"><?php echo $address2;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($city_err)) ? 'has-error' : ''; ?>">
                            <label>city</label>
                            <input type="text" city="city" city="form-control" value="<?php echo $city; ?>">
                            <span class="help-block"><?php echo $city;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($state_country_err)) ? 'has-error' : ''; ?>">
                            <label>state_country</label>
                            <input type="text" state_country="state_country" city="form-control" value="<?php echo $state_country; ?>">
                            <span class="help-block"><?php echo $state_country;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($zocde_pcode_err)) ? 'has-error' : ''; ?>">
                            <label>zocde_pcode</label>
                            <input type="text" zocde_pcode="zocde_pcode" city="form-control" value="<?php echo $zocde_pcode; ?>">
                            <span class="help-block"><?php echo $zocde_pcode;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <label>phone</label>
                            <input type="text" phone="phone" city="form-control" value="<?php echo $phone; ?>">
                            <span class="help-block"><?php echo $phone;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($paid_err)) ? 'has-error' : ''; ?>">
                            <label>paid</label>
                            <input type="text" paid="paid" city="form-control" value="<?php echo $paid; ?>">
                            <span class="help-block"><?php echo $paid;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($status)) ? 'has-error' : ''; ?>">
                            <label>status</label>
                            <input type="text" status="status" city="form-control" value="<?php echo $status; ?>">
                            <span class="help-block"><?php echo $status;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($activation_code)) ? 'has-error' : ''; ?>">
                            <label>activation_code</label>
                            <input type="text" activation_code="activation_code" city="form-control" value="<?php echo $activation_code; ?>">
                            <span class="help-block"><?php echo $activation_code;?></span>
                        </div> 
                        <div class="form-group <?php echo (!empty($avatar)) ? 'has-error' : ''; ?>">
                            <label>avatar</label>
                            <input type="text" avatar="avatar" city="form-control" value="<?php echo $avatar; ?>">
                            <span class="help-block"><?php echo $avatar;?></span>
                        </div> 


                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>