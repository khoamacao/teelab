<?php
$act = "dangxuat";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'dangxuat':
        include_once "./View/logout.php";
        break;

    case 'dangxuat_action':
        if (isset($_POST['submit'])) {
            // Check if the user is logged in
            if (isset($_SESSION['makh']) && isset($_SESSION['tenkh'])) {
                unset($_SESSION['makh']);
                unset($_SESSION['tenkh']);
                echo '<script> alert("Đăng xuất thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action-home"/>';
            } else {
                // User is not logged in
                echo '<script> alert("Bạn chưa đăng nhập vui lòng đăng nhập trước");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
            }
        }
        break;
}
?>
