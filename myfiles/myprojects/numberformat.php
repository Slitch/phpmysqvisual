
<?php

/*
 number_format ( float $number [, int $decimals = 0 ] ) : string


number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," ) : string
*/
$number = 1234.56;
echo '<p>' . $number . '</p>';

// english notation (default)
$english_format_number = number_format($number);
// 1,235
echo '<p>' . $english_format_number . '</p>';

// French notation
$nombre_format_francais = number_format($number, 2, ',', ' ');
// 1 234,56
echo '<p>' . $nombre_format_francais . '</p>'; 

// French notation
$nombre_format_danish = number_format($number, 2, ',', '.');
// 1 234,56
echo '<p> Danish: ' . $nombre_format_danish . '</p>'; 

$number = 1234.5678;
echo '<p>' . $number . '</p>';

// english notation without thousands separator
$english_format_number = number_format($number, 2, '.', '');
// 1234.57
echo '<p>' . $english_format_number . '</p>'; 

?>
