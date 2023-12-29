<?php
class connect
{
	var $db=null;
	public function __construct() 
	{
		$dsn='mysql:host=localhost;dbname=teelab';
		$user='root';
		$pass='';
		try{
		$this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
		}catch(\Throwable $th)
		{
			echo "Error: " ;
		}

	}
//	https://megacode.vn/files/view/php-phuong-thuc-getinstance-la-gi-va-tai-sao-dung-getinstance-4922.html
//	lấy đúng 1 ID nên lấy fetch vô luôn
	public function getInstance($select)
	{
		$result=$this->db->query($select);
		// echo $select;
		$result=$result->fetch();
		return $result;
	}
	
//	Lấy nhiều rows 1 table
	public function getList($select)//select * from hanghoa
	{
		$result=$this->db->query($select);
		// echo $results;
		return($result);
	}
//	https://viblo.asia/p/cai-dat-ung-dung-php-thuan-su-dung-mvc-va-oop-4P856aA3lY3
	//thực hiện insert ,delete,update
	public function exec($query)
	{
		$result=$this->db->exec($query);//this->db-exec(insert into hanghoa)
		// echo $results;
		return($result);
	}
	// //để an toàn dữ liệu
	// function execp($query)
	// {
	// 	$statement=$this->db->prepare
	// }	
}
?>