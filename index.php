<?php include('header.php')?>

<!-- xac minh dang nhap -->
<?php      
session_start() ;
if ( !isset( $_SESSION[ 'userid' ] ) ){
include('navbar-login.php');
}else{
if($_SESSION['role']==1){
include('navbar-admin.php');
}else{
include('navbar-user.php');
}

}
?> 
<?php include('footer.php')?>