<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];	
		}else{
			$tam='';
		}if($tam=='them'){
			include('modules/quanlikhuvucban/them.php');	
		}if($tam=='sua'){
			include('modules/quanlikhuvucban/them.php');		
		}
    ?>
   </div>
<div class="right">
<?php
	include('modules/quanlikhuvucban/lietke.php');	
?>
</div>