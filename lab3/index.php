<?php
// class customEx extends Exception{
// 	public function errorMessage(){
// 		return $this->getLine().$this->getFile();

// 	}
// }

// throw new customEx("fa");

// echo 'a';

// throw new ErrorException("Fàfafafaf");

// $mang=array();
// for ($i=0; $i < 10; $i++) { 
// 	$a = new stdClass();
// 	$a->id = 1;
// 	$a->name = 'Product '.$i;
// 	array_push($mang, $a);
// }
// var_dump($mang);

// foreach ($mang as $r) {
// 	echo $r->id;
// }

$a = array(
	0,1,2,3,4
);

$b=array_slice($a, 1, 1);
var_dump($a);
?>
