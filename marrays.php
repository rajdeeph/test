<?php

$a = array (
             2,
             3,
             'person' => array(
				'name'=>'raj',
				'age'=>'31',
				'address'=> array(
							'Unit No' =>'E24',
							'Street' => 'Gotha Street'
						)
				)
           );

echo "My name is :". $a['person']['name']."I live in Unit No:". $a['person']['address']['Unit No'] ." located in " .$a['person']['address']['Street'].PHP_EOL;

//print_r($a);
