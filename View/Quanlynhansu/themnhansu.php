
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 	<link rel="stylesheet" href="../../Pages/Css/style.css">
 	<link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css” />
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
	 				<p align="center" style="font-size: 18px">Quản lí nhân sự</p>
	 			</li>
	 		</ul>
	 	</div>
       <div style="width: 10px;height: 20px;float: right;margin-top: 20px;z-index: auto;">
       	<a href="masterpage.php?p=danhsachnhansu"><i class="fas fa-chevron-circle-left fa-3x" style="float: right;margin-right: 30px;color:blue"></i></a>
       </div>
       		<div id="them-ns" align="center" >
       			<!-- <h3 align="center">Điền thông tìn vào form</h3> -->
				<form action="" method="post">
					<h3 style="padding-bottom: 15px;font-family: monospace; color: white; background-color: #222222	;padding-top: 10px;">Nhập thông tin nhân viên</h3>
		 			<table id="them-ns-table">
		 				<tr >
		 					<td>
		 						<p style="font-size: 20px;color: black">Tên nhân viên :</p>
		 					</td>
		 					<td>
		 						<input type="text" style="margin-left: 4px;">
		 					</td>
		 				</tr>
		 				<tr>
			 				<td>
			 					<p style="font-size: 20.5px;color: black">Mã nhân viên :</p>
			 				</td>
			 				<td>
			 					<input type="text" style="margin-left: 7px;">
			 				</td>
			 			</tr>	
		 				<tr>
			 				<td>
			 					<p style="font-size: 21px;color: black">Nam Sinh :</p>
			 				</td>
			 				<td>
			 					<input type="text" style="margin-left: 37px;">
			 				</td>
			 			</tr>
			 			<tr style="margin-top: 10px">
			 				<td>
			 					<p style="font-size: 20px;color: black">CMND :</p>
			 				</td>
			 				<td>
			 					<input type="text" style="margin-left: 69px;">
			 				</td>
			 			</tr>	
		 				<tr>
			 				<td>
			 					<p style="font-size: 20px;color: black">Điện thoại :</p>
			 				</td>
			 				<td>
			 					<input type="text" style="margin-left: 38px;">
			 				</td>
		 				</tr>
		 				<tr>
			 				<td>
			 					<p style="font-size: 20px;color: black">Địa chỉ :</p>
			 				</td>
			 				<td>
			 					<input type="text" style="margin-left: 67px;">
			 				</td>
		 				</tr>
		 				<tr>
			 				<td>
			 					<p style="font-size: 20px;color: black">Email :</p>
			 				</td>
			 				<td>
			 					<input type="text" style="margin-left: 78px;">
			 				</td>
		 				</tr>
		 				<tr>
			 				<td>
			 					<p style="font-size: 20px;color: black">Chức vụ :</p>
			 				</td>
			 				<td>
			 					<input type="" style="margin-left: 51px;">
			 				</td>
		 				</tr>
		 				<tr>
			 				<td>
			 					<p style="font-size: 20px;color: black">Hình ảnh :</p>
			 				</td>
			 				<td>
			 					<input type="file" style="height: 20px" >
			 				</td>
		 				</tr>
		 				<tr>
			 				<td align="center">
			 					<input type="submit" name="" value="Thêm nhân sự" id="submit-ns" style="color: black">
			 					<input type="reset" name="" value="Làm mới" id="submit-ns" style="color: black">
			 				</td>
		 				</tr>
		 			</table>
			 	</form>   
		 	</div>
		            <?php 
		                

		             ?>
     </div>  
 	
 </body>
 </html>
