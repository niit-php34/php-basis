<?php
// $mang = array(1,2,3,4);
// foreach ($mang as $r) {
// 	echo $r;
// }

/*$mang[]=2;
$mang[]=3;
$mang[]=4;*/

//tao mang lien ket
/*$mang = array(
	'nguyen' => 30,
	'thanh'=> 40,
	'luan'=>50
);

foreach ($mang as $k => $v) {
	echo 'key:'.$k.' and value:'.$v.'</br>';
}

echo $mang['nguyen'];*///lay gia tri theo key


//mang hai chieu 
/*$mang = array(
	array(1,2,3,4,5),
	array(6,7,8,9),
	array(10,11,12,13,14)
);

for ($i=0; $i < count($mang); $i++) { 
	for ($j=0; $j < count($mang[$i]) ; $j++) { 
		echo $mang[$i][$j].'</br>';
	}
}

//khai bao mang 3 chieu
$mang2 = array(
	array(
		array(1,2,3,4),
		array(3,4,5,6),
	),
	array(
		array(3,4,5,5),
		array(4,5,6,7)
	)
)*/

$mang = array(1,2,5,4,5,6);
var_dump($mang);
//sap xep tang dan
sort($mang);
var_dump($mang);
//sap xep giam dan
rsort($mang);
var_dump($mang);
$manglienket = array(
	'hi' => 2,
	'say_hi'=>1,
	'say_hello'=>6,
	'like'=>3
);
var_dump($manglienket);
//sap xep tang dan theo value
asort($manglienket);
var_dump($manglienket);
//sap xep tang dan theo key 
ksort($manglienket);
var_dump($manglienket);
//sap xep giam dan theo value
arsort($manglienket);
var_dump($manglienket);
//sap xep giam dan theo key
krsort($manglienket);
var_dump($manglienket);

//them/xoa phan tu mang vao cuoi mang
$mang2 = array('red','green','blue');
var_dump($mang2);
array_push($mang2, 'pink');
var_dump($mang2); // red,green,blue,pink
array_pop($mang2);
var_dump($mang2); //red, green,blue

//them/xoa phan tu vao dau mang
array_shift($mang2);
var_dump($mang2); // green, blue

array_unshift($mang2, 'black');
var_dump($mang2); // black,green,blue

//xoa phan tu tai vi tri offset
array_slice($mang2, 1);
var_dump($mang2);

//xoa phan tu tai vi tri offset va noi them phan tu
array_splice($mang2, 1,0,array('orange','amber'));
var_dump($mang2);
?>