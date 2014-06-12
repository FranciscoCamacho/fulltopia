<?php

echo 'Substring Testing';


$string='10000.10001.10002.10003.10004.10009';

$subString1=explode( '.', $string ) ;


// echo '<br/>';
// echo $subString1[1];
// echo '<br/>';
// echo $subString1[2];
// 

foreach( $subString1 as $item){
	echo $item;
	echo '<br/>';
}


$newRec='11111';
$string=$string.'.'.$newRec;


	
	echo 'New string is'.'<br/>';
	echo $string;
	echo '<br/>';
	echo '<br/>';


	$subString1=explode( '.', $string ) ;
foreach( $subString1 as $item){
	echo $item;
	echo '<br/>';
}



?>