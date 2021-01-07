<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM users WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["first_name"];
                $address = $row["last_name"];
                $salary = $row["email"];
                $salary = $row["password"];
                $salary = $row["registration_date"];
                $salary = $row["user_leve"];
                $salary = $row["class"];
                $salary = $row["address1"];
                $salary = $row["address2"];
                $salary = $row["city"];
                $salary = $row["state_country"];
                $salary = $row["zocde_pcode"];
                $salary = $row["phone"];
                $salary = $row["paid"];
                $salary = $row["status"];
                $salary = $row["activation_code"];
                $salary = $row["avatar"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
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
                        <h1>Thông Tin</h1>
                    </div>
                    <div class="form-group">
                        <label>first_name</label>
                        <p class="form-control-static"><?php echo $row["first_name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>last_name</label>
                        <p class="form-control-static"><?php echo $row["last_name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <p class="form-control-static"><?php echo $row["email"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <p class="form-control-static"><?php echo $row["password"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>registration_date</label>
                        <p class="form-control-static"><?php echo $row["registration_date"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>user_leve</label>
                        <p class="form-control-static"><?php echo $row["user_leve"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>class</label>
                        <p class="form-control-static"><?php echo $row["class"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>address1</label>
                        <p class="form-control-static"><?php echo $row["address1"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>address2</label>
                        <p class="form-control-static"><?php echo $row["address2"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>city</label>
                        <p class="form-control-static"><?php echo $row["city"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>state_country</label>
                        <p class="form-control-static"><?php echo $row["state_country"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>zocde_pcode</label>
                        <p class="form-control-static"><?php echo $row["zocde_pcode"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <p class="form-control-static"><?php echo $row["phone"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>paid</label>
                        <p class="form-control-static"><?php echo $row["paid"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>status</label>
                        <p class="form-control-static"><?php echo $row["status"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>activation_code</label>
                        <p class="form-control-static"><?php echo $row["activation_code"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>avatar</label>
                        <p class="form-control-static"><?php echo $row["avatar"]; ?></p>
                    </div>

                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>