<?php
/*include("../Controller/C_quanlynhansu.php");
$p = new Quanlynhansu();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../Pages/Css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="main"> 
      <div class="top">
        <p align="center" style="font-size: 18px;color: white">Welcome to webpage manager </p>
      </div>
      <!-- NHAP -->
<?php
  /* $p-> gettaikhoan();*/
?>
      <!-- NHAP -->
               <marquee behavior="slide" direction="scroll" loop="infiniti" scrollamount="30"><h1 align="center" style="margin-top: 50px;font-family: Museo Slab">Have a nice day!!</h1></marquee>
              <ul id="menu-trangchu">
                    <li><a href="masterpage.php?p=quanlynhansu"><button type="submit" name="btn-ql" value="ql-ns" id="btn-ql" >Quản Lí Nhân Sự</button></a></li>
                    <li ><a href="masterpage.php?p=quanlykhachhang"><button type="submit" name="ql-kh" style="background-color: #BB0000;color: white">Quản Lí Khách Hàng</button></a></li>
                    <li><a href="masterpage.php?p=quanlykhachhang"><button type="submit" style="background-color: #333300;color: yellow  ">Quản Lí Phòng</button></a></li>
                    <li><a href=""><button type="submit" style="background-color: #660033;color: #00FF00    ">Quản Lí Thống Kê</button></a></li>
              </ul>
      </div>  
          
          </script>
    <script>
      $(document).ready(function(){
        $("#email").click(function(){
          alert("Hệ thống chưa thể thực hiện chức năng này!");

        });
      });
    </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
     <script type="text/JavaScript" src="bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/JavaScript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
