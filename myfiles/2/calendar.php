
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<title>Hello, world!</title>
</head>
<body>
<div class="container">
<?php # Script 2.9 - calendar.php #2


// Make the month array:
$month = [1 => 
	'January',
	'February',
	'March',
	'April',
	'May',
	'June',
	'July',
	'August',
	'September',
	'October',
	'November',
	'December'
];

// Make the days and years array:
$days = range(1, 31);
$years = range(2017, 2027);

// Make days pull-down menu:
echo '<select name="month">';
foreach ($month as $value) {
	// All commented out example works
	echo "<option value=\"$value\">$value</option>\n";
	// echo "<option value=" . $value . ">$value</option>\n";
	// echo '<option value="' . $value . '">' . $value . '</option>' . "\n";
	// echo "<option value=\"{$value}\">{$value}</option>\n";
}
echo '</select>' . "\n";

// Make days pull-down menu:
echo '<select name="day">';
foreach ($days as $value) {
	// All commented out example works
	echo "<option value=\"$value\">$value</option>\n";
	// echo "<option value=" . $value . ">$value</option>\n";
	// echo '<option value="' . $value . '">' . $value . '</option>' . "\n";
	// echo "<option value=\"{$value}\">{$value}</option>\n";
}
echo '</select>' . "\n";

// Make the years pull-down menu:
echo '<select name="years">';
foreach ($years as $value) {
	// All commented out example works
	echo "<option value=\"$value\">$value</option>\n";
	// echo "<option value=" . $value . ">$value</option>\n";
	// echo '<option value="' . $value . '">' . $value . '</option>' . "\n";
	// echo "<option value=\"{$value}\">{$value}</option>\n";
}
echo '</select>' . "\n";

// ========== END OF PHP SCRIPT ==========
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