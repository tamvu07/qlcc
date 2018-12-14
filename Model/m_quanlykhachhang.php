<?php 
	class qlkh extends quanlycc
	{
		public function loadkh ($sql)
		{
			$this->connect();
			$this->mysqli_query($link,$sql);
			$this->mysqli_num_rows($resuslt);
			if($i >0)
			{
				while($this->row = $this->mysql_fetch_array($result))
				{
					$this->getAlldata()
					$stt = $this->row['stt'];
					$tenkh = $this->row['tenkh'];
					$makh = $this->row['password'];
					$sdt = $this->row['sdt'];
					


				}
			}

		}

	}

 ?>