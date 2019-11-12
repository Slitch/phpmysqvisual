<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<title>Form</title>
</head>
<body>
<div class="container">
<table class="table table-hover">
<!-- <table> -->
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
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="bootstrap-4.3.1-dist/js/jquery-3.3.1.slim.min.js"><\/script>')</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="bootstrap-4.3.1-dist/js/popper.min.js"><\/script>')</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"><\/script>')</script>
</body>
</html>