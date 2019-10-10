<?php
	$sql="select *from thucuong order by mathucuong desc ";
	$run=mysqli_query($con,$sql);
?>
<table width="562" border="1">
  <tr>
  	<td width="25">ID</td>
    <td width="89">Mã thức uống</td>
    <td width="98">Tên thức uống</td>
    <td width="66">Số lương</td>
    <td width="72">Giá bán</td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
 <?php
 	$i=0;
	while($dong=mysqli_fetch_array($run)){
 ?>
  <tr>
  	<td><?php echo $i; ?></td>
    <td><?php echo $dong['mathucuong'] ?></td>
    <td><?php echo $dong['tenthucuong'] ?></td>
    <td><?php echo $dong['soluong'] ?></td>
    <td><?php echo $dong['giaban'] ?></td>
    <td width="86"><div align="center"><a href="modules/quanlithucuong/sua.php?mathucuong=<?php echo $dong['mathucuong'] ?>">Sửa</a></div></td>
    <td width="80"><div align="center"><a href="modules/quanlithucuong/xuly.php?id=<?php echo $dong['mathucuong'] ?>">Xóa</a></div></td>
  </tr>
 <?php
 	$i++;
	}
 ?>
</table>
