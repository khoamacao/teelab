<?php
class user {
    //phuongt thuc kiem tra user va email co ton tai chua
    function checkUser($user,$email)
    {
        $db=new connect();
        $select="SELECT a.username, a.email from khachhang a WHERE a.username='$user' or a.email='$email'";
        $result=$db->getList($select);
        return $result;
    }
    //phuong thuc insert vao db
    function insertKH($tenkh,$user,$matkhau,$email,$dc,$sdt)
    {
        $db=new connect();
        $query="INSERT INTO khachhang (makh, tenkh,username,matkhau,email,diachi,sodienthoai)
        VALUES (NULL, '$tenkh', '$user', '$matkhau', '$email','$dc','$sdt')";
        //exec
        $result=$db->exec($query);
        return $result;
    }
    function loginUser($user,$pass){
        $db=new connect();
        $select="SELECT a.makh, a.tenkh,a.username,a.matkhau from khachhang a WHERE a.username='$user' AND a.matkhau='$pass'";
        echo $select;
        $result=$db->getList($select);
        return $result;
    }
}
?>