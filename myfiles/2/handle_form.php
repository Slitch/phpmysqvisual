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

<!-- Script 2.1 - form.html -->
<?php # Script 2.4 - handle_form.php #3

// Validate the name:
if (!empty($_REQUEST['name'])) {
	$name = $_REQUEST['name'];
} else {
	$name = NULL;
	echo '<p class="text-danger">You forgot to enter your name!</p>';
}
// Validate the email:
if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else {
	$email = NULL;
	echo '<p class="text-danger">You forgot to enter your email address!</p>';
}
// Validate the comments:
if (!empty($_REQUEST['comments'])) {
	$comments = $_REQUEST['comments'];
} else {
	$comments = NULL;
	echo '<p class="text-danger">You forgot to enter your comments!</p>';
}

// Validate the gender;
if (isset($_REQUEST['gender'])) {

	$gender = $_REQUEST['gender'];

	if ($gender == 'M') {
		$greeting = '<p><strong>Good day, Sir!</strong></p>';
	} elseif ($gender == 'F') {
		$greeting = '<p><strong>Good day, Madam!</strong></p>';
	} else { // Unacceptable value:
		$gender = NULL;
		echo '<p class="text-danger">Gender should be either "M" or "F"!</p>';
	}
} else { // $_REQUEST['gender'] is not set.
	$gender = NULL;
	echo '<p class="text-danger">You forgot to select your gender!</p>';
}

// If everything ik OK, print the message:
if ($name && $email && $gender && $comments) {
	echo "<p>Thank you, <strong>$name</strong>, for the following message:</p>
	<pre>$comments</pre> 
	<p>We will replay to you at <em>$email</em>.</p>";

	echo $greeting;

} else {
	echo '<p class="text-danger">Please go back and fill out the form again.</p>';
}
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