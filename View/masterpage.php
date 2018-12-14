
<?php 
    include ("../Controller/C_quanlynhansu.php");
    $p = new QuanLynhansu;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chung cư Thịnh Phát </title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
	<link href="dashboard.css" rel="stylesheet">
	<link rel="icon" href="../../../../favicon.ico">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../Pages/Css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span> Thịnh Phát</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Cài Đặt</a></li>
            <li><a href="#">Thông tin</a></li>
            <li><a href="#">Hổ Trợ</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Tìm kiếm...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" style="margin-top: 150px;">
            <li ><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Quản lí nhân sự</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Quản lí Phòng</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Quản lí khách hàng</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Thống kê</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Báo cáo </a></li>
          </ul>
          <div class="col-sm-3 col-md-10 sidebar">
          <ul class="nav nav-sidebar" style="margin-top: 100px;border-top: 1px solid black">
            <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Liên hệ</a></li>
            <li id="email"><a href="#" ><span class="glyphicon glyphicon-align-justify" ></span> Email</a></li>
          </ul>
        </div>
      </div>
        <footer class="page-footer font-small blue">
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> Chungcuannhien.com</a>
          </div>
          <!-- Copyright -->
        </footer>
    <script type="text/JavaScript" src="bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/JavaScript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

