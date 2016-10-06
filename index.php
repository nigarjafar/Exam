<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php
		$connect=mysqli_connect("localhost","root","","exam");
		$sql ="SELECT * FROM exam";
		$query=mysqli_query($connect, $sql);
		$row=mysqli_fetch_assoc($query);
	?>
<section id="main">
	<div class="first-type">
			<div class="info">
				<span><?=$row['width']?></span>
				<span><?=$row['height']?></span>
				<span><?=$row['color']?></span>
			</div>
	</div>
	<div class="first-type">
		<div class="info">
			<span><?=$row['width']?></span>
			<span><?=$row['height']?></span>
			<span><?=$row['color']?></span>
		</div>
	</div>
	<?php
		$row=mysqli_fetch_assoc($query);
	?>
	<div class="second-type">
		<div class="info">
			<span><?=$row['width']?></span>
			<span><?=$row['height']?></span>
			<span><?=$row['color']?></span>
		</div>
	</div>
	<div class="second-type">
		<div class="info">
			<span><?=$row['width']?></span>
			<span><?=$row['height']?></span>
			<span><?=$row['color']?></span>
		</div>
	</div>
	<div class="second-type">
		<div class="info">
			<span><?=$row['width']?></span>
			<span><?=$row['height']?></span>
			<span><?=$row['color']?></span>
		</div>
	</div>
</section>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
