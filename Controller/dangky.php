<?php
$act = "dangky";
if(isset($_GET['act'])){
    $act=$_GET['act'];
}
switch($act){
    case 'dangky':
        include_once "./View/registration.php";
        break;
    case 'dangky_action':
        // gui du lieu thong tin nguoi dung vua nhap qua dangky_action
        // nhan
        $tenkh='';
        $dc='';
        $sdt='';
        $user='';
        $email='';
        $pass='';
        if (isset($_POST['submit'])){
            $tenkh=$_POST['txttenkh'];//minhanh
            $dc=$_POST['txtdiachi'];//hcm
            $sodt=$_POST['txtsdt'];//123456
            $user=$_POST['txtusername'];//anhanh
            $email=$_POST['txtemail'];//anh1@itc.edu.vn
            $pass=$_POST['txtpass'];//123
            // $saltF="G433H#";
            // $saltL="Td23$%";
           // $passnew=md5($saltF.$pass.$saltL);// da duoc ma hoa
           $passnew=md5($pass);
            //controller y/c phai dem thong tin nay insert vao db?Model
            //trc khi insert can kiem tra xem user va email da ton tai chua  
            $kh=new user();
            $check=$kh->checkUser($user,$email)->rowCount();
            if ($check>0)
            {
                echo '<script> alert("Username hoặc email đã tổn tại");</script>';
                        //  include_once "./View/registration.php";
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangky"/>';              

            }  
            else 
            {
                // insert vao db
                $insKH=$kh->insertKH($tenkh,$user,$passnew,$email,$dc,$sodt);
                if($insKH!==false)
                {
                    echo '<script> alert("Đăng ký thành công");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';                }
                else 
                {
                    echo '<script> alert("Đăng ký không thành công");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangky"/>';                }
            }
        }
        break;

     
}
?>