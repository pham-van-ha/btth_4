<?php
    //B1: Mở kết nối
    $hostname = 'localhost:3308';
    $username = 'root';
    $password = '';
    $dbname = "btth4";
    $conn = mysqli_connect($hostname, $username, $password,$dbname);
    if (!$conn) {
        die('Không thể kết nối: ' . mysqli_error($conn));
        exit();
    }
    //echo '<i class="fas fa-check-circle"></i>'
  //  include('navbar-admin.php');

    //mysqli_close($conn); //Câu lệnh đóng kết nối
    ?>