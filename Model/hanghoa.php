<?php 
    class hanghoa{
        // Phương thức hiển thị sản phẩm new
        function getHangAoThun() {
            //B1: kết nối được với dữ liệu
            $db = new connect();
            //B2: cần lấy gì thì truy vấn cái đó
            $select = "SELECT DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau AND a.maloai = 1 ORDER by a.mahh DESC LIMIT 8";
            //B3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result = $db->getList($select);
            return $result; // Lấy được dữ liệu về
        }     
        function getHangAoThunAll() {
            //B1: kết nối được với dữ liệu
            $db = new connect();
            //B2: cần lấy gì thì truy vấn cái đó
            $select = "SELECT DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau AND a.maloai = 1 ORDER by a.mahh DESC ";
            //B3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result = $db->getList($select);
            return $result; // Lấy được dữ liệu về
        }     
        function getHangAoSoMi()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau AND a.maloai = 2 ORDER by a.mahh DESC LIMIT 8";
                   $result=$db->getList($select);
            return $result;
        }
        function getHangAoSoMiAll()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau AND a.maloai = 2 ORDER by a.mahh DESC";
             $result=$db->getList($select);
            return $result;
        }
        function getHangAoPoLo()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau AND a.maloai = 3 ORDER by a.mahh DESC LIMIT 8";
           
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoPoLoAll()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau AND a.maloai = 3 ORDER by a.mahh DESC";
        
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoKhoac()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau AND a.maloai = 4 ORDER by a.mahh DESC LIMIT 8";
           
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoKhoacAll()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "SELECT DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau AND a.maloai = 4 ORDER by a.mahh DESC ";
        
            $result=$db->getList($select);
            return $result;
        }
        function getHangAoAll()
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia, c.mausac from hanghoa a,cthanghoa b, mausac c 
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau ORDER by a.mahh";
        
        $result=$db->getList($select);
            return $result;
        }

        function getHangAoAll_page($start,$limit)
        {
            //b1 kết nối với dữ liệu
            $db=new connect();
            //b2 Viết câu truy vấn 
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia, c.mausac from hanghoa a,cthanghoa b, mausac c 
                        WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau ORDER by a.mahh DESC limit ".$start.",".$limit;  
             $result=$db->getList($select);
            return $result;
        }










        function getHangHoaSale() {
            //B1: kết nối được với dữ liệu
            $db = new connect();
            //B2: cần lấy gì thì truy vấn cái đó
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia, c.mausac from hanghoa a,cthanghoa b, mausac c 
                        WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau ORDER by a.mahh DESC; LIMIT 4";
            //B3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result = $db->getList($select);
            return $result; // Lấy được dữ liệu về
        }
        //Phương thức lấy tất cả những sản phẩm mà không có sale
        function getHangHoaAll() {
            //B1: kết nối được với dữ liệu
            $db = new connect();
            //B2: cần lấy gì thì truy vấn cái đó
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia, c.mausac from hanghoa a,cthanghoa b, mausac c 
                        WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau ORDER by a.mahh";
            //B3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result = $db->getList($select);
            return $result; // Lấy được dữ liệu về
        }
        function getHangHoaAllSale() {
            $db = new connect();
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia, c.mausac from hanghoa a,cthanghoa b, mausac c 
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia!=0 ORDER by a.mahh desc";
            $result = $db->getList($select);
            return $result;
        }
        //Phương thức lấy chi tiết sản phẩm
        function getHangHoaId($id) {
            $db = new connect();
            $select = "select DISTINCT a.mahh, a.tenhh, a.mota, b.dongia,b.hinh from hanghoa a, cthanghoa b where a.mahh = b.idhanghoa and a.mahh=$id";
            $result = $db->getInstance($select);
            return $result;//Trả về 1 row, array(mahh:19, tenhh: giày)
        }
        //Phương thức lấy màu sản phẩm
        function getHangHoaMau($id) {
            $db = new connect();
            $select = "select DISTINCT b.idmau, b.mausac from cthanghoa a, mausac b where a.idmau = b.idmau and a.idhanghoa=$id";
            $result = $db->getList($select);
            return $result;
        }
        //Phương thức lấy Size của 1 sản phẩm
        function getHangHoaSize($id) {
            $db = new connect();
            $select = "select DISTINCT b.idsize, b.size from cthanghoa a, sizegiay b where a.idsize = b.idsize and a.idhanghoa=$id";
            $result = $db->getList($select);
            return $result;
        }
        //Phương thức lấy hình sản phẩm
        function getHangHoaHinh($id) {
            $db = new connect();
            $select = "select DISTINCT a.hinh from cthanghoa a where a.idhanghoa=$id";
            $result = $db->getList($select);
            return $result;
        }
       
        function getHangHoaMauHinh($mahh, $mau, $size)
        {
            $db = new connect();
            $select = "select a.hinh from cthanghoa a, mausac b,sizegiay c
            WHERE a.idmau=b.idmau and a.idsize=c.idsize and a.idhanghoa=$mahh and b.idmau=$mau and c.size=$size";
            echo $select;
            $result = $db->getInstance($select);
            return $result; 
        }
        function  getHangHoaIdMauGH($idmau) {
            $db = new connect();
            $select = "SELECT mausac FROM mausac WHERE idmau=$idmau";
            $result = $db->getInstance($select);
            return $result;
        }
        
        function timkiemSP($tenhh){
            $db = new connect();
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia, c.mausac from hanghoa a,cthanghoa b, mausac c 
            WHERE a.mahh=b.idhanghoa and b.idmau=c.idmau and a.tenhh like '%$tenhh%'";
            $result = $db->getList($select);
            return $result;
        }

       
    }
?>