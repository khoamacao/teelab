
<?php
// controller yêu cầu model insert thông tin vào trong hoadon và tra ra mã số họ vừa insert vào
 if(isset($_SESSION['makh']))
{
    $makh=$_SESSION['makh']; 
    $hd=new hoadon();
// lấy mã số hd vừa mới insert vào
$sohd=$hd->insertHoaDon($makh);// số 17
$_SESSION['masohd']=$sohd;
$total=0;
// đã có mã số hd(cha) thì insert đc vào bảng cthoadon 
foreach ($_SESSION['cart'] as $key => $item) {
//controller yêu cầu model insert vào bảng cthoadon
$hd->insertCTHoaDon($sohd, $item['mahh'],$item['soluong'],$item['mau'], $item['size'],$item['thanhtien']);
$total+=$item['thanhtien'];
// cập nhật lại cthanghoa dua vào
}
// tiến hành cập nhật lại tổng tiền vào trong bảng hoadon
$hd->updateTongTien($sohd, $makh, $total);
}
include_once "./View/order.php";
unset($_SESSION['cart']);
?>