
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 	<link rel="stylesheet" href="../../Pages/Css/style.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
 </head>
 <body id="tc">
 	<div class="main"> 
      	<div class="top-qlns">	
 			<ul id="menu-qlns" style="color: white">
	 			<li>
	 				<a href="index.php" style="font-size: 18px; color: white">Trang chủ</a>
	 			</li>
	 			<li>
	 				<p align="center" style="font-size: 18px">Quản lí nhân sự</p>
	 			</li>
	 		</ul>
	 	</div>
       <div style="width: 10px;height: 20px;float: right;margin-top: 20px;z-index: auto;">
       	<a href="index.php"><i class="fas fa-chevron-circle-left fa-3x" style="float: right;margin-right: 30px;color:blue"></i></a>
       	</div>
       	<div id="hopdong">
			<form action="" method="post">
				
	      			 <p id="showhd" style="color: black;margin-left: 10px;text-decoration:underline;">Tạo hợp đồng mới</p>
	       			<label for="tìm hợp đồng" style="color: black;margin-left: 400px;">Tìm hợp đồng</label> <input type="text" placeholder="Tìm kiếm">
				
			<table align="center" style="margin-top: 30px;margin-left: 100px;text-align: center;border-top: 1px solid black">
			<th style="text-align: center;">Tên nhân viên</th>
			<th style="text-align: center;">Mã số</th>
	 		<th style="text-align: center;">Số Điện thoại</th>
	 		<th style="text-align: center; width: 50px">CMND</th>
	 		<th style="text-align: center;width: 50px">Địa chỉ</th>
	 		<th style="text-align: center;width: 50px">Email</th>
	 		
	 		<tr>
				<td>
	 				<input type="text" style="height: 20px;margin-left: 10px">
	 			</td>
	 			<td>
	 				<input type="text" style=" height: 20px;width: 100px;margin-left: 10px">
	 			</td>
	 			<td>
	 				<input type="text" style="height: 20px;width: 120px;margin-left: 10px">
	 			</td>
	 			<td>
	 				<input type="text" style=" height: 20px;width: 120px;margin-left: 10px">
	 			</td>
	 			<td>
	 				<input type="text" style=" height: 20px;margin-left: 10px">
	 			</td>
	 			<td>
	 				<input type="text" style=" height: 20px;width: 125px;margin-left: 10px">
	 			</td>
	 		</tr>
	 		<th  style="text-align: center;width: 50px;" colspan="4">Ngày vào</th>
	 		<th  style="text-align: center;width: 50px">Thời hạn</th>
	 		<tr>
	 			<td colspan="4">
	 				<input type="text" style=" height: 20px;width: 100px;margin-left: 10px">
	 			</td>
	 			<td>
	 				<input type="text" style=" height: 20px;width: 100px;">
	 			</td>
	 		</tr>	
	 		<tr style="margin-bottom: 10px">
		 		<td colspan="7">
		 			<input type="submit" id="them-ns-btn2" value="Tạo hợp đồng">
		 		</td>
	 		</tr>
	 	</table>
	 	
	 	</form>
		</div>
		<div>
			<h3 align="center" style=" font-family: monospace;color: black;font-size: 34px;margin-top: 34px">Danh sách hợp đồng</h3>
				<table align="center" style="margin-top: 30px; margin-left: 190px;text-align: center;border-top: 1px solid black">
					<th style="text-align: center;">STT</th>
					<th style="text-align: center;">Tên nhân viên</th>
					<th style="text-align: center;">Mã số</th>
			 		<th style="text-align: center;">Số Điện thoại</th>
			 		<th style="text-align: center; width: 50px">Xóa</th>
			 		<th style="text-align: center;width: 50px">Sửa</th>
			 		<th style="text-align: center;width: 50px">Thu nhập</th>
			 		<tr>
		 				<td>
							<input type="text" style="width: 50px;height: 20px;">
						</td>
						<td>
			 				<input type="text" style="height: 20px;margin-left: 10px">
			 			</td>
			 			<td>
			 				<input type="text" style=" height: 20px;width: 125px;margin-left: 10px">
			 			</td>
			 			<td>
			 				<input type="text" style="height: 20px;margin-left: 10px">
			 			</td>
			 			<td>
			 				<a href=""><i class="fas fa-trash-alt fa-1x"></i></a>
			 			</td>
			 			<td>
			 				<a href=""><i class="fas fa-wrench fa-1x"></i></a>
			 			</td><td>
			 				<a href=""><i class="fas fa-clipboard-check fa-2x"></i></a>
			 			</td>
			 		</tr>
			 	</table>
			</div>
     </div>  
    <script language="JavaScript">
    	var x = getElementById('showhd');
    	var hd = getElementByClassName('hopdong');
    	function click () {
    		if(x.onclick())
    		{
    			hd.show();
    		}

    	}
    	
    	
    </script>
     <script type="text/JavaScript" src="bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/JavaScript" src="bootstrap/js/bootstrap.min.js"></script>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </body>
 </html> 