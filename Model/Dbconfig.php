<?php 
	class quanlycc {
		private $localhost = 'localhost';
		private $username = 'root';
		private $pass = '';
		private $dbname ='qlcc';
		private $conn =NULL;
		private $result =NULL;

		public function connect() {
			$this->conn = new mysqli($this->localhost,$this->username,$this->pass,$this->dbname);
			if (!$this->conn) {
				echo"Kết nối thất bại!";
				exit();
			}
			else {
				mysql_query("set names utf8");
			}
			return $this->conn;
		}	

		public function gettaikhoan()
		{
			$link = $this->connect();
			$sql = "select * from taikhoan";
			$kq = mysql_query($sql);
			if($kq > 0)
			{
				var_dump($kq);
				exit();
			}else{
				echo "loi get tai khoan !";
			}
		}



		public function excute ($sql) {
			$this ->result = $this->conn->mysqli_query($sql);
			return $this->result;
		}
		public function getData (){
			if($this->result)
			{
				$data = mysqli_fetch_array($result);
			}
			else
			{
				$data = 0;
			}
			return $data;
		}
		public function getAlldata()
		{
			if($this->result)
			{
				while ($datas = $this->getData()) {
					$data[] = $datas;
				}
			}
			else
			{
				return False;
			}
		}

		public function login ($username,$pass){
			$link = $this->connect();
			$this->result=mysqli("select username,password form taikhoan where username='$this->username' and password = $this->pass limit 1");


		}

		}	

 ?>