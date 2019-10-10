<?php
	include('../../../config.php');
	$tenthucuong=$_POST['tenthucuong'];
	$mathucuong=$_POST['mathucuong'];
	$id = $_GET['id'];
	$soluong=$_POST['soluong'];
	$giaban=$_POST['giaban'];
	if(isset($_POST['them'])){
			$sql="insert into thucuong (mathucuong,tenthucuong,soluong,giaban) values ('$mathucuong','$tenthucuong','$soluong','$giaban')";
			mysqli_query($con,$sql);
			header('location:../../quanli.php?quanly=quanlithucuong&ac=them');
	}elseif(isset($_POST['sua'])){
		$sql = "update thucuong set mathucuong='$mathucuong', tenthucuong='$tenthucuong', soluong='$soluong', giaban='$giaban' where mathucuong='$mathucuong'";
		mysqli_query($con,$sql);
		header('location:../../quanli.php?quanlithucuong&ac=sua&mathucuong='.$_GET['mathucuong']);
	}else{
		//xoa
		$sql="delete from thucuong where mathucuong='$id' ";
		mysqli_query($con,$sql);
		header('location:../../quanli.php?quanly=quanlithucuong&ac=them');
	}	
?>