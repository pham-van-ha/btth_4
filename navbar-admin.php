

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>

</html>
    <!-- <div class="wrapper"> -->
        <div class="container-fluid">
            <!-- <div class="row"> -->
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng</h2>
                        <a href="insert.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM users";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>userid</th>";
                                        echo "<th>first_name</th>";
                                        echo "<th>last-name</th>";
                                        echo "<th>email</th>";   
                                        echo "<th>password</th>";
                                        echo "<th>registration_date</th>";
                                        echo "<th>class</th>";
                                        echo "<th>address1</th>";
                                        echo "<th>address2</th>";
                                        echo "<th>city</th>";
                                        echo "<th>state_country</th>";
                                        echo "<th>zocde_pcode</th>";
                                        echo "<th>phone</th>";
                                        echo "<th>paid</th>";
                                        echo "<th>status</th>";
                                        echo "<th>activation_code</th>";
                                        echo "<th>avatar</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['userid'] . "</td>";
                                        echo "<td>" . $row['first_name'] . "</td>";
                                        echo "<td>" . $row['last_name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>" . $row['registration_date'] . "</td>";
                                        echo "<td>" . $row['class'] . "</td>";
                                        echo "<td>" . $row['address1'] . "</td>";
                                        echo "<td>" . $row['address2'] . "</td>";
                                        echo "<td>" . $row['city'] . "</td>";
                                        echo "<td>" . $row['state_country'] . "</td>";
                                        echo "<td>" . $row['zocde_pcode'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>" . $row['paid'] . "</td>";
                                        echo "<td>" . $row['status'] . "</td>";
                                        echo "<td>" . $row['activation_code'] . "</td>";
                                        echo "<td>" . $row['avatar'] . "</td>";

                                        echo "<td>";
                                            echo "<a href='aaa.php?id=". $row['userid'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['userid'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='bbb.php?id=". $row['userid'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

     