<?php 
// Simple array 6. - simple-array6.php

// Go to next line both in the browser and in source code.
$br =  "<br>\n";

// PHP 5.4 short array. instead of array() we use []
$tv = [
	'IA' => 'Iowa',
	'MD' => 'MeryLand'
];
$artists = ['Clem Smnide', 'Shins', 'Eels'];
$days = [1 => 'Sun', 'Mon', 'Tue'];

echo $tv['IA'] . $br;
echo $tv['MD'] . $br;
echo $artists[0] . $br;
echo $artists[1] . $br;
echo $artists[2] . $br;
echo $days[3] . $br;
?>