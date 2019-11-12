<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th><h2>Rating</h2></th>
			<th><h2>Title</h2></th>
		</tr>
	</thead>
	<tbody>
<?php # Script 2.8 - sorting.php

// create the array:
$movies = [
	'Casablanca' 					=> '10',
	'To Kill a Mockingbird' 		=> '10',
	'The English Patient' 			=> '2',
	'Stranger Than Fiction' 		=> '9',
	'Story of the Weeping Camel' 	=> '5',
	'Donnie Darko' => '7'
];

// Display the movies in their original order:
echo '
	<tr>
		<td><strong>In their original order:</strong></td>
	</tr>';

foreach ($movies as $title => $rating) {
	echo "
	<tr>
		<td>$rating</td>
		<td>$title</td>
	</tr>";
}
// Display the movie sorted by title:
ksort($movies);
echo '
	<tr>
		<td><strong>Sorted by title:</strong></td>
	</tr>';

foreach ($movies as $title => $rating) {
	echo "
	<tr>
		<td>$rating</td>
		<td>$title</td>
	</tr>";
}
// Display the movies sorted by rating:
arsort($movies);
echo '
	<tr>
		<td><strong>Sorted by rating:</strong></td>
	</tr>';

foreach ($movies as $title => $rating) {
	echo "
	<tr>
		<td>$rating</td>
		<td>$title</td>
	</tr>";
}

?>

</body>
</html>