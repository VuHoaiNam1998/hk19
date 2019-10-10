<?php
  $conn = new mysqli("localhost", "root", "", "quanliquancafe");
  $mathucuong = $_GET['mathucuong'];
	$sql="select * from thucuong where mathucuong='$mathucuong'";
  $result=$conn->query($sql);
  if($result->num_rows>0){
    $dong = $result->fetch_assoc();
  }
  // print_r($dong);
?>
<form action="modules/quanlithucuong/xuly.php?mathucuong=<?php echo $dong['mathucuong']?>" method="post" enctype="multipart/form-data">
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