<?php 
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
strlen(arsort($name));
foreach ($name as $names) {
    echo "Do you like $names? " . strlen($names) . " <br>\n";
}

$br =  "<br>\n";

$ten = range(1, 100);

// instead of printing each array element values individually
// We can iterate trough every array element values using foreach loop
foreach ($ten as $value) {
	echo $value . $br;
}
?>