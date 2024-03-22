<?php
// unset($_SESSION['cart']);
// trước khi người dùng nhìn thấy giỏ hàng thì cần kiểm tra xem use đã có giỏ hàng chưa
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array(); //chưa nhiều món hàng, mỗi món hàng là object
}
$act = "giohang";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;

    case 'giohang_action':
        // thông tin mua hàng đc chuyển qua đây,mahh,mausac,size,soluong
        $mahh = 0;
        $mausac = '';
        $size = '';
        $soluong = 1;
        if (isset($_POST['mahh'])) {
            $mahh =$_POST['mahh'] ;
            $mausac = $_POST['mymausac'];// id
            $size = $_POST['size'];// ten
            $soluong = $_POST['soluong'];
            // controller yêu cầu model add vào gio hàng
            $gh=new giohang();
            $gh->addGioHang($mahh,$mausac,$size,$soluong);
            echo '<script>
            alert("Sản phẩm đã được thêm vào giỏ hàng thành công ^-^ !");
            
          </script>';
          echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }

        break;
    case 'delete_giohang':
        if(isset($_GET['id']))
        {
            $vt=$_GET['id'];
            unset($_SESSION['cart'][$vt]);
        }
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        break;
    case 'update_giohang':
        if(isset($_POST['newqty']))
        {
            $slmoi=$_POST['newqty'];// $slmoi=array(1:1,2:3,3:1);
            // duyệt qua giỏ hàng, thằng nào có số lượng mà khác với sl mới thì update
            foreach ($slmoi as $key => $value) {
                if($_SESSION['cart'][$key]['soluong']!=$value)
                {
                    $gh=new giohang();
                    $gh->update_item($key,$value);
                }
            }
        }
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        break;

}

?>