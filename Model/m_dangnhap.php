<?php 
include("Pages/qlcc/class.php");
	class dangnhap extends quanlycc{
		public function login($user,$pass)
		{
			$link = $this->connect();
			$ketqua = $this->excute("select username,password from taikhoan wher username=$user and password=$pass");
			$i=mysql_num_rows($ketqua);
			if($i>0)
			{
				while ($this->i->getAldata($ketqua)) {
					$id=$row['id'];
					$user=$row['username'];
					$pass=$row['password'];
					session_start();
					$_SESSION['id'] = $id;
					$_SESSION['username'] = $user;
					$_SESSION['password'] = $pass;
					echo '<script type="text/javascript">
 							window.location = "trangchu.php";
							 </script>';
				}
			}
			else{
					echo "Đăng nhập không thành công!!";
			}


		}
	}
 ?>
 