
<html>
<head>
<meta  charset="utf-8" />
<title>Khu vực</title>
<link href="pagehome.css" type="text/css" rel="stylesheet">
</head>

<body>
<div class="header">
	<p>Phần mềm bán cafe - bàn</p> 
       
</div>
<div class="trangchu">
	<p align="right"><a href="trangchu.php">Trang chủ</a></p>
</div>
<div class="cackhuvuc">
	<?php
		$kv = array(
			[
				'ma_kv' => 1,
				'ten_kv' => 'khu vuc 1'
			],
			[
				'ma_kv' => 2,
				'ten_kv' => 'khu vuc 2'
			],
			[
				'ma_kv' => 3,
				'ten_kv' => 'khu vuc 3'
			]
		);
		foreach($kv as $value):
	?>
	<div class="khuvuc">
		<p><?php echo $value['ten_kv']; ?></p>
		<ul>
			<li>Ban 1</li>
			<li>Ban 1</li>
			<li>Ban 1</li>
		</ul>
	</div>
		<?php endforeach; ?>
</div>

</div>
<script src="app.js"></script>
</body>
</html>