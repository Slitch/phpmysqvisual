<?php
$BR = '<br>' . "\n"; 
// Review and Pursue 
// Page 74.
/*============================================================
 |
 |	Look up in the PHP manual one of the array functions
 |	introduced in this book. Then check out some of the
 |	other array-related functions built into the language.
 |
 ============================================================*/

// A typical array function is $var = array(item1, item2.. etc) and the shorthand is  $var = [item1, item2.. etc]

$name = [
	'Torben', 
	'Hansen', 
	'Buller', 
	'Erik', 
	'Wagner', 
	'Pernille', 
	'Jessica', 
	'Kim', 
	'Kathrine', 
	'Erica', 
	'Sasha',
	'Natasha' 
];

echo "<pre>", print_r($name), "</pre>";
echo $BR;
asort($name);
foreach ($name as $names) {
    echo $names . $BR;
}

?>