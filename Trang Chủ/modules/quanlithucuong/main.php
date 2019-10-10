<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];	
		}else{
			$tam='';
		}if($tam=='them'){
			include('modules/quanlithucuong/them.php');	
		}if($tam=='sua'){
			include('modules/quanlithucuong/sua.php');		
		}
    ?>
   </div>
<div class="right">
<?php
	include('modules/quanlithucuong/lietke.php');	
?>
</div>