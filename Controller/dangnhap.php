<?php
$act = "dangnhap";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/login.php";
        break;
    case 'dangnhap_action':
        $user = '';
        $pass = '';
        if (isset($_POST['submit'])) {
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];
            
            $passnew = md5($pass);
            $kh = new user();
            $logUser = $kh->loginUser($user,$passnew);
            $count =$logUser->rowCount();                                  
            $uslg =$logUser->fetch();     
            if ($count > 0) {
                $_SESSION['makh'] = $uslg['makh'];
                $_SESSION['tenkh'] = $uslg['tenkh'];
                echo $_SESSION['makh'];
                echo '<script> alert("Đăng nhập thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action-home"/>';
            } else {
                echo '<script> alert("Đăng nhập không thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
            }
        }
        break;
}
?>