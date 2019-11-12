<?php 
// Simple array 9. - simple-array9.php

// Go to next line both in the browser and in source code.
$br =  "<br>\n";

// Simple indexed array in the range of 1-10. Below you see the index 0-9 
$ten = range(1, 10);

// instead of printing each array element values individually
// We can iterate trough every array element values using foreach loop
foreach ($ten as $value) {
	echo $value . $br;
}
?>