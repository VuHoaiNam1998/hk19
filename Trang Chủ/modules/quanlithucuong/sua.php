<?php
  
  $mathucuong = $_GET['mathucuong'];
  $sql="select * from thucuong where mathucuong='$mathucuong'";
  $run = mysqli_query($con,$sql);
  $dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlithucuong/xuly.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa thức uống</div></td>
  </tr>
  <tr>
    <td>Tên thức uống</td>
    <td><input type="text" name="tenthucuong" value="<?php echo $dong['tenthucuong'] ?>"></td>
  </tr>
  <tr>
    <td>Mã thức uống</td>
    <td><input type="text" name="mathucuong" value="<?php echo $dong['mathucuong'] ?>"></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong" value="<?php echo $dong['soluong'] ?>"></td>
  </tr>
  <tr>
    <td>Giá bán</td>
    <td><input type="text" name="giaban" value="<?php echo $dong['giaban'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
    	<input type="submit" name="sua" id="sua" value="Sửa">
    </div>    
    </td>  
  </tr>
</table>

</form>