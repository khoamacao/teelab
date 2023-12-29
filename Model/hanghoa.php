<?php
    class hanghoa{
        //thuộc tính
        //hàm tạo
        //phương thức lấy về 8 hàng hóa mới nhất

        function getHangAoThun()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT  a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai = 5  GROUP BY a.mahh ORDER BY a.mahh DESC limit 8 ";         
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoThunAll()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT  a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai = 5  GROUP BY a.mahh ORDER BY a.mahh DESC";         
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoSoMi()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT  DISTINCT  a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai = 1  GROUP BY a.mahh ORDER BY a.mahh DESC limit 4";         
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoSoMiAll()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT  a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai = 1  GROUP BY a.mahh ORDER BY a.mahh DESC";         
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoPoLo()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT  a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai = 2  GROUP BY a.mahh ORDER BY a.mahh DESC limit 8";         
    
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoPoLoAll()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT  a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai = 2  GROUP BY a.mahh ORDER BY a.mahh DESC ";         
    
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoKhoac()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai = 4  GROUP BY a.mahh ORDER BY a.mahh DESC limit 8";         
    
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoKhoacAll()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai = 4  GROUP BY a.mahh ORDER BY a.mahh DESC";         
    
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoAll()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai !=0  GROUP BY a.mahh ORDER BY a.mahh ";         
    
        $result=$db->getList($select);
            return $result;
        }
        function getHangAoAll_page($start,$limit)
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh, a.tenhh, a.hinh, a.soluotxem, a.giamgia, b.dongia, c.mausac FROM hanghoa a, cthanghoa b, mausac c WHERE a.mahh = b.idhanghoa AND c.Idmau = b.idmau AND a.maloai !=0  GROUP BY a.mahh ORDER BY a.mahh DESC limit ".$start.",".$limit;         
    
             $result=$db->getList($select);
            return $result;
        }

        function getHangHoaChiTiet($id)
        {
            //b1:kết nối được với dữ liệu
            $db = new connect();
            //b2: viết câu truy vấn
            //distinct là không trùng
            $select = "SELECT DISTINCT a.mahh,a.tenhh,a.mota,b.dongia, a.hinh FROM hanghoa a, cthanghoa b WHERE a.mahh=b.idhanghoa and a.mahh=$id;";
            //query, nằm trong pt getList và getInstance
            $result = $db->getInstance($select);//trả về đúng 1 dòng
            return $result; //lấy được dữ liệu
        }
        function getHangaoMau($id)
         {
        //b1:kết nối được với dữ liệu
        $db = new connect();
        //b2: viết câu truy vấn
        //distinct là không trùng
        $select = "SELECT DISTINCT a.idmau,b.mausac FROM cthanghoa a, mausac b WHERE a.idmau=b.idmau and a.idhanghoa=$id";
        //query, nằm trong pt getList và getInstance
        $result = $db->getList($select); //trả về đúng 1 dòng
        return $result; //lấy được dữ liệu
    }
        function getHangaoSize($id)
         {
            //b1:kết nối được với dữ liệu
            $db = new connect();
            //b2: viết câu truy vấn
            //distinct là không trùng
            $select = "SELECT DISTINCT a.idsize,b.tensize FROM cthanghoa a, sizeao b WHERE a.idsize=b.idsize and a.idhanghoa=$id";
            //query, nằm trong pt getList và getInstance
            $result = $db->getList($select); 
            return $result; //lấy được dữ liệu
        }

      
    } 
?>          