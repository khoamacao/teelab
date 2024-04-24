<?php
class hanghoa{
    function getHangHoa()
    {
        $db=new connect();
        $select="select * from hanghoa";
        $result=$db->getList($select);
        return $result;
    }
    function insertHangHoa($tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota)
    {
        $db=new connect();
        $query="insert into hanghoa(mahh,tenhh,maloai,dacbiet,soluotxem,ngaylap,mota) 
        values (Null,'$tenhh',$maloai,$dacbiet,$slx,'$ngaylap','$mota')";
        $result=$db->exec($query);
        return $result;
    }
    // lấy thông tin của 1 sản phẩm
    function getHangHoaID($id)
    {
        $db=new connect();
        $select="select * from hanghoa where mahh=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    function updateHangHoa($mahh,$tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota)
    {
        $db=new connect();
        $query="update hanghoa set tenhh='$tenhh',maloai=$maloai,dacbiet=$dacbiet,soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' 
        where mahh=$mahh";
        $result=$db->exec($query);
        return $result;
    }
    // phương thức thống kê
    function getThongke()
    {
        $db=new connect();
        $select="select a.tenhh,sum(b.soluongmua) as soluong from hanghoa a,cthoadon b WHERE a.mahh=b.mahh GROUP BY a.tenhh";
        $result=$db->getList($select);
        return $result;
    }
    // lấy thông tin của màu sắc
    function getMau()
    {
        $db=new connect();
        $select="select * from mausac";
        $result=$db->getList($select);
        return $result;
    }
    // lay thông tin của size
    function getSize()
    {
        $db=new connect();
        $select="select * from sizegiay";
        $result=$db->getList($select);
        return $result;
    }

}
?>