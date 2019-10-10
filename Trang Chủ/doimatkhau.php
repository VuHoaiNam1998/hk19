<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đổi mật khẩu</title>
<link href="pagehome.css" type="text/css" rel="stylesheet"/>

<?php
	include('../config.php');
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['tentaikhoan'];
		$matkhaucu=$_POST['matkhaucu'];
		$matkhaumoi=$_POST['matkhaumoi'];
		$sql_doimatkhau = mysqli_query($con,"select *from admin where username='$taikhoan' and password='$matkhaucu' limit 1");
		$get_rows=mysqli_num_rows($sql_doimatkhau);
		if($get_rows==0){
			echo 'Bạn đã nhập sai| Vui lòng nhập lại';	
		}else {
			$sql_capnhat = mysqli_query($con,"update admin set password='$matkhaumoi' ");	
			echo 'Bạn đã thay đổi mật khẩu thành công';
		}
	}
?>
</head>

<body>
<div class="trangchu">
  <p align="left"><a href="trangchu.php">Quay lại</a></p>
<div align="center"> 
<form action="" method="post"> 
  <table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Đổi mật khẩu admin</div></td>
    </tr>
  <tr>
    <td>Tên tài khoản</td>
    <td><input type="text" name="tentaikhoan"></td>
  </tr>
  <tr>
    <td>Mật khẩu cũ</td>
    <td><input type="password" name="matkhaucu"></td>
  </tr>
  <tr>
    <td>Mật khẩu mới</td>
    <td><input type="password" name="matkhaumoi"></td> 
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="doimatkhau" value="Đổi mật khẩu">
    </div></td>
    </tr>
</table></form>
</div>
</div>
</body>
</html>