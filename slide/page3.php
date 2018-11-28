<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			current_index = $('.slider-wrapper ul li').length-1;
			$('.btn-next').click(function(){
				if(current_index>=1){
					$('.slider-wrapper ul li').eq(current_index).hide();
					current_index-=1;
				}
			})

			$('.btn-prev').click(function(event) {
				if(current_index<4){
					current_index+=1;
					$('.slider-wrapper ul li').eq(current_index).show();
				}
			});
		});

	</script>

	<style type="text/css">
	.slider-wrapper li{
		list-style: none;
		position: absolute;
	}

	.slider-wrapper ul{
		margin:0px;
		padding:0px;
		position: relative;
	}

	.slider-wrapper img{
		width: 500px;
		height: 200px;
	}

	.slider-wrapper .btn-prev{
		color: #fff;
		font-size: 40px;
		position: absolute;
		top:85px;
		left:0px;
		z-index: 100
	}

	.slider-wrapper .btn-next{
		color: #fff;
		font-size: 40px;
		position: absolute;
		top:85px;
		right:0px;
		z-index: 100
	}

	.slider-wrapper{
		position: relative;
		width: 500px;
		height: 200px;
		margin: 100px auto;
	}

</style>
</head>

<body>

	<?php 
	$image_number = $_POST['image_number'];
	$mang_anh=array();
	for ($i=0; $i < $image_number; $i++) { 
		array_push($mang_anh, $_POST['anh_'.$i]);
	}
	var_dump($mang_anh);
	?>
	
	<div class="slider-wrapper">

		<i class="fa fa-arrow-circle-left btn-prev" aria-hidden="true"></i>

		<ul>
			<?php 
			foreach ($mang_anh as $r) {
				?>
				<li>
					<img src="<?php echo $r; ?>"/>   	 	
				</li>
			<?php }//end foreach?>
		</ul>

		<i class="fa fa-arrow-circle-right btn-next" aria-hidden="true"></i>
	</div>
	


</body>

</html>