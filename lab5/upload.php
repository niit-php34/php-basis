<?php 
if(isset($_FILES['image'])){
	$ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
	$filter = array('jpeg','png','jpg');
	//if(in_array($ext, $filter)!=true){
		//echo 'file ko dung dinh dang';
		//exit();
	//}
	echo $ext;
	if($ext!='jpeg' && $ext!='png' && $ext!='jpg'){
		echo 'File ko dung dinh dang';
		exit();
	}

	$size = $_FILES['image']['size'];
	//allow just 5mb or below file zie
	if($size > (5*1024*1024)){
		echo 'File size phai nho hon 5mb';
		exit();
	}

    //create dir follow month and year
	$dir = 'uploads/'.date('M').'_'.date('Y');
	if(!file_exists($dir) || !is_dir($dir)){
		mkdir('uploads/'.date('M').'_'.date('Y'),0775);
	}

	//move file to upload folder
	move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.date('M').'_'.date('Y').'/'.md5(time()).'.'.$ext);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="image"/>
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>