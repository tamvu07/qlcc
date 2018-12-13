
<?php 
    include ("Controller/C_quanlynhansu.php");
    $p = new QuanLynhansu;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chung cư Thịnh Phát </title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link href="dashboard.css" rel="stylesheet">
	<link rel="icon" href="../../../../favicon.ico">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="Pages/Css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body id='pageWrap'>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php" style="color: white"><span class="glyphicon glyphicon-home" style="color: white"></span> An Nhiên</a>
        </div>
        <div class="navbar-collapse collapse">
          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Cài Đặt</a></li>
            <li><a href="#">Thông tin</a></li>
            <li><a href="#">Hổ Trợ</a></li>
          </ul> -->
          <form class="navbar-form navbar-right" style="margin-right: 450px;">
            <input type="text" class="form-control" placeholder="Tìm kiếm..." style="width: 350px;">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row" style="background-color:  #eff5f5">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" style="margin-top: 150px;" id="right-menu" >
            <li><a href="masterpage.php?p=quanlynhansu"><span class="glyphicon glyphicon-align-justify"></span> Quản lí nhân sự</a></li>
            <li ><a href="masterpage.php?p=quanlyphong"><span class="glyphicon glyphicon-align-justify"></span> Quản lí Phòng</a></li>
            <li><a href="masterpage.php?p=quanlykhachhang"><span class="glyphicon glyphicon-align-justify"></span> Quản lí khách hàng</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Thống kê</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Báo cáo </a></li>
          </ul>
          <div class="col-sm-3 col-md-10 sidebar">
          <ul class="nav nav-sidebar" style="margin-top: 50px;">
            <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Liên hệ</a></li>
            <li id="email"><a href="#" ><span class="glyphicon glyphicon-align-justify" ></span> Email</a></li>
          </ul>
        </div>
      </div>
        <?php 
          if(isset($_GET['p']))
          {
            $p =$_GET['p'];
            if($p=='quanlynhansu')
            {
              include "View/Quanlynhansu/quanlynhansu.php";
            }  
            if($p=='themnhansu')  
            {
              include "View/Quanlynhansu/themnhansu.php";
            }  
            if($p=='danhsachnhansu')  
            {
              include "View/Quanlynhansu/danhsachnhansu.php";
            }  
            if ($p=='quanlykhachhang') 
            {
              include "View/Khachhang/quanlykhachhang.php";
            } 
            if ($p=='hopdongnhanvien') 
            {
              include "View/Quanlynhansu/hopdongnhanvien.php";
            } 
            if ($p=='thongtinkhachhang') 
            {
              include "View/Khachhang/thongtinkhachhang.php";
            } 
             if ($p=='themkhachhang') 
            {
              include "View/Khachhang/themkhachhang.php";
            } 
            // if ($p=='quanlykhachhang') 
            // {
            //   include "View/Quanlynhansu/quanlykhachhang.php";
            // } 
            // if ($p=='quanlykhachhang') 
            // {
            //   include "View/Quanlynhansu/quanlykhachhang.php";
            // } 
            // if ($p=='quanlykhachhang') 
            // {
            //   include "View/Quanlynhansu/quanlykhachhang.php";
            // } 
            // if ($p=='quanlykhachhang') 
            // {
            //   include "View/Quanlynhansu/quanlykhachhang.php";
            // } 
            // if ($p=='quanlykhachhang') 
            // {
            //   include "View/Quanlynhansu/quanlykhachhang.php";
            // }
          } 
           else 
         {
          include "View/trangchu.php";
         }
      ?> 
      </div>
     </div> 
    <script type="text/JavaScript" src="bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/JavaScript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
         <!-- Footer -->
        <footer class="page-footer font-small-bue" style="width: 100%; height: 70px; padding-top: 25px; background-color: #000000;color: white">
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="" style="text-decoration: none;color: white;">Chungcuannhien.com</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
</html>


