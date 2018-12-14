
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 	<link rel="stylesheet" href="../../Pages/Css/style.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 </head>
 <body id="tc">
 	<div class="main"> 
      	<div class="top-qlns">	
 			<ul id="menu-qlns" style="color: white">
	 			<li>
	 				<a href="index.php" style="font-size: 18px; color: white">Trang chủ</a>
	 			</li>
	 			<li>
	 				<p align="center" style="font-size: 18px">Quản lí khách hàng</p>
	 			</li>
	 		</ul>
	 	</div>
       <div style="width: 10px;height: 20px;float: right;margin-top: 20px;z-index: auto;">
       	<a href="index.php"><i class="fas fa-chevron-circle-left fa-3x" style="float: right;margin-right: 30px;color:blue"></i></a>
       </div>
       	<h3 align="center" style=" font-family: monospace;color: black;font-size: 34px;margin-top: 34px">Danh sách khách hàng</h3>
		<table align="center" style="margin-top: 80px; margin-left: 190px;text-align: center;border-top: 1px solid black">
			<th style="text-align: center;">STT</th>
			<th style="text-align: center;">Tên khách hàng</th>
			<th style="text-align: center;">Mã khách hàng</th>
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
	 		<tr align="center" >
	 			<td colspan="7" style="margin-top: 20px">
	 				<a href="masterpage.php?p=themkhachhang"><button id="them-ns-btn2">Thêm khách hàng</button></a>
	 			</td>		
	 		</tr>
	 	</table>
     </div>  
 	
 </body>
 </html>