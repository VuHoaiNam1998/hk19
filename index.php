<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
<link type="text/css" rel="stylesheet" href="css.css">
</head>

<body>
<?php
	include('config.php');
	session_start();
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from admin where username='$username' and password='$password' limit 1";
		$query=mysqli_query($con,$sql);
		$num=mysqli_num_rows($query);
		if($num>0){
			$_SESSION['dangnhap']=$username;
			header('location:Trang chủ/trangchu.php');
		}else{
			header('location:index.php');
		}		
	}
?>
<div class="dangnhap">
<h2 align="center">PHẦN MỀM QUẢN LÍ BÁN HÀNG CAFE - BÀN</h2>
<form action="" method="post" >
<center>
<table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Đăng Nhập</div></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" size="20"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" size="20"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"> 
      <div align="center">
        <input type="submit" name="login" id="button" value="Login" />
      </div>
    </td>
  </tr>
</table></center></form>
</div>
</body>
</html>