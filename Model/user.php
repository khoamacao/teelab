<?php 
    class user{
        //Phương thức kiểm tra trùng username và email
        function checkUser($user, $email) {
            $db = new connect();
            $select = "select a.username, a.email from khachhang a where a.username='$user' or a.email='$email';";
            $result = $db -> getList($select);
            return $result;
        }

        function insertKH($tenkh, $username, $matkhau, $email, $diachi, $sodienthoai) {
            $db = new connect();
            $query = "INSERT INTO khachhang (makh, tenkh, username, matkhau, email, diachi, sodienthoai) VALUES (NULL, '$tenkh', '$username', '$matkhau', '$email', '$diachi', '$sodienthoai')";
            // exec
            // echo $query;
            $result = $db->exec($query);
            return $result;
        }
        //Phương thức login
        function loginUser($user, $pass) {
            $db = new connect();
            $select = "select a.makh, a.tenkh, a.username from khachhang a where a.username='$user' and a.matkhau='$pass'";
            echo $select;
            $result = $db -> getInstance($select);
            return $result;
        }
        //pt ktra email có tồn tại k
        function checkEmail($email) {
            $db = new connect();
            $select = "select * from khachhang a WHERE a.email='$email'";
            $result = $db -> getList($select);//trả về table
            return $result;
        }
        //pt update
        function updatePassEmail($emailold, $passnew) {
            $db = new connect();
            $query = "update khachhang set matkhau='$passnew' where email='$emailold'";
            $db->exec($query);
        }
    }
?>