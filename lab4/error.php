<?php 
function total($a,$b){
	if($a<10){
		throw new Exception("number 1 is below 10");
	}

	if($a>50){
		throw new Exception("number must be bellow 50");
	}
}

//total(9,5);
try {
	total(9,5);
} catch (Exception $e) {
	echo $e->getMessage();
} catch (Exception $e)
{
	echo $e->getMessage();
}

?>
