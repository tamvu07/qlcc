<?php 
  include("../Model/Dbconfig.php");
  $p = new quanlycc;
  $p->connect();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="../Pages/Css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body style="background-color: #f7c18f">
  <div class="login" >
    <div class="top" style="padding-top: 10px;">
      <h2 style="text-align: center;font-weight: 10px;font-size: 55px; color: white">Login</h2>
    </div>
     <form method="post" action="" style="margin-top: 96px;margin-left: 44px;" >
      
        <table align="center" style="" >
          <tr>
            <td style="text-align: center;">
              <label for="username" style="font-size: 30px;">Tài Khoản </label> <br>
              <input type="text" name="user-id" placeholder="Tài Khoản" class="td"><br>
            </td> 
          </tr>
          <tr >
            <td style="text-align: center">
              <label for="password" style="font-size: 30px">Mật Khẩu </label> <br>
              <input type="password" name="pass-id" placeholder="Mật khẩu" class="td"><br>
            </td>
          </tr>
          <tr>
            <td>
              
            </td>
          </tr>
          <tr >
            <td width="300">
              <input type="checkbox" name="ask" value="remember"  style="margin-top: 20px;"> Lưu mật khẩu <br>
            </td>
          </tr>
          <tr>
            <td align="center">
              <input type="submit" name="confirm" value="Đăng nhập" style="margin-top: 25px;font-size: 20px" class="submit" id="btn-submit">
            </td>
          </tr>

        </table>
        <?php 
          

         ?>
        
      </form>
      <script>
          $var = 5;
          $(document).ready(function(){
            $("input").mouseover(function(){
              $("input").animate(){
                left: '250px',
                  opacity: '0.5',
                  height: '150px',
                  width: '150px'
              }
            });
          });
        </script>
    </div>  
 
</body>
</html>