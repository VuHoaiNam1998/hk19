<div class="content"> 
    	<?php
			if(isset($_GET['quanly'])){
				$tam=$_GET['quanly'];	
			}else{
				$tam='';
			}if($tam=='quanlithucuong'){
				include('modules/quanlithucuong/main.php');	
			}
        ?> 
  </div>      
    <div class="clear"></div>