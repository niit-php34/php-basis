<?php 
$image_number = $_POST['image_number'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="page3.php">
		<input type="hidden" name="image_number" value="<?php echo $image_number ?>">
		<?php 
		for ($i=0; $i < $image_number ; $i++) { 
			?>
			<label>Link anh thu <?php echo $i+1; ?></label>
			<input type="text" name="anh_<?php echo $i; ?>"/>
		</br>
		<?php
	}//end for
	?>
	<input type="submit" name="submit" value="next">
</form>
</body>
</html>