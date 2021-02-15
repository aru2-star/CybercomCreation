<?php
$data2 = [
	'1'=>[
		'1' => [
			'1' => 1,
			'2' => 2		
		],
		'2' => [
			'3' => 3,
			'4' => 4		
		]
	],
	'2'=>[
		'3' => [
			'5' => 5,
			'6' => 6		
		],
		'4' => [
			'7' => 7,
			'8' => 8		
		]
	]
];

$final=[];
foreach ($data2 as $key => $value) {
    foreach ($value as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            $final[$key2]['category']=$key;
            $final[$key2]['attribute']=$key1;
            $final[$key2]['option']=$key2;
        }
       
    }
}

print_r($final);
?>
