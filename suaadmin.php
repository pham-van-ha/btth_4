<?php
session_start();
ob_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/styleform.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>   

</head>
<body>
	<div class="container-fluid">
        <!--menu giua-->
        <!--het menu giua-->
        <div></div>
        <div class="row mt-2 bg-light">
			<div class="col-lg-6">
				<form method="GET" action="xuly_timkiemadmin.php">
					<!-- <input style="border-radius: 20px; background-color:darkgrey" type="search" name="timkiem" placeholder="Nhap tu khoa tim kiem"> -->
					<!-- <button style="border-radius: 20px; background-color:lightseagreen" type="submit" value="submit">Tim Kiem</button> -->
				</form>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <button class="btn btn-light bg-dark" ><a style="text-decoration: none; color:white;" href="#"><-Back To</a></button>
                <button class="btn btn-light bg-info" ><a style="text-decoration: none; color:white;" href="themdangnhap.php">Thêm Mới</a></button>
            </div>
        </div>
<div class="row bg-light">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 bg-success" style="border-radius:20px solid yellow;">
        <?php $ngay=date('Y-m-d'); ?>
        <h3 align="center">Sửa Chi Tiết Admin</h3>
				<?php
					$userid = isset($_GET['userid'])?$_GET['userid']:0;
					$db="SELECT * FROM users where userid = $userid";
					// $stmt=$conn->prepare($db);
                	// $stmt->setFetchMode(PDO::FETCH_ASSOC); 
               	//  	$stmt->execute();
                // 	$result=$stmt->fetch();
				// ?>
                <form  name="suaadmin" action="login.php?userid=<?php echo $result['userid']; ?>" method="post">
                <div class="form-group">
                    <label class="control-lable col-md-12">ID USER</label>
                    <div class="col-md-12">
                        <input name="" type="text" value="<?php echo $result['userid']; ?>" readonly class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-lable col-md-12">Tên đăng nhập</label>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_tendangnhap" type="text" value="<?php echo $result['username']; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-lable col-md-12">Mật Khẩu</label>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_matkhau" type="text" value="<?php echo $result['password']; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-lable col-md-12">Họ tên</label>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_hoten" type="text" value="<?php echo $result['last_name']; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-lable col-md-12">Số Điên Thoại</label>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_dienthoai" type="text" value="<?php echo $result['phone']; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-lable col-md-12">Email</label>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_email" type="text" value="<?php echo $result['email']; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-block btn-warning">Sửa Admin</button>
                        <button type="reset" class="btn btn-block btn-danger">Reset</button>
                    </div>
                </div>
                <div class="form-group">
                    <button tyle="button" class="btn btn-block btn-danger">Thoát</button>
                </div>
				</form>

</div>
</div>
<div class="col-lg-3"></div>
</div>
</body>
</html>