<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	//tao du lieu mau 
	$mang = array();
	for ($i=0; $i < 10 ; $i++) { 
		$a = new stdClass();
		$a->id= $i;
		$a->name='San pham thu '.($i+1);
		array_push($mang, $a);
	}

	?>

	<?php 
	foreach ($mang as $r) {
		?>
		<div>
			<h4><?php echo $r->name; ?></h4>
			<a href="cart.php?id=<?php echo $r->id ?>&name=<?php echo $r->name; ?>">Add to cart (them sp vao gio hang)</a>
		</div>
		<?php
	}
	?>
</body>
</html>