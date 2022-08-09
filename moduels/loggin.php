<?php
session_start();
include './connect_QLI.php';

$email = $_POST['email'];
$pass = MD5($_POST['pass']);
if(isset($_POST['login']) && $email !="" && $pass !=""){
    $sql = "SELECT * FROM user WHERE email= '$email' and pass = '$pass'";
    $query = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($query);
    if ($num_rows==0) {
        echo "tên đăng nhập hoặc mật khẩu không đúng !";
    }else{
        //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
        echo "Dang nhap thanh cong";
        $_SESSION['username'] = $email;
    }
}
header('Location: http://localhost/Templete/view/index.php');
?>