<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"> -->
	<title>Hello, world!</title>
</head>
<body>
	<div class="container">
<?php # Script 2.5 - handle_form.php #4

// Set POST variable
$name 		= $_POST['name'];
$comments 	= $_POST['comments'];
$email 		= $_POST['email'];
$age 		= $_POST['age'];

// Set not-empty variables
$e_name 	= !empty($name);
$e_comments = !empty($comments);
$e_email 	= !empty($email);



if ( $e_name && $e_comments && $e_email ) {
	echo "<p>Thank you, <strong>{$name}</strong>, for the following comments:</p>
	<pre>{$comments}</pre>
	<p>We will reply to you at <em>{$email}</em></p>\n";
} else {
	echo '<p class="text-danger">Please go back and fill out the form again.</p>';
}

// rewritten from two nested conditions into to one condition
if (isset($_POST['gender']) && $_POST['gender']=='M'){
	$gender = $_POST['gender']; 
	echo '<p><b>Good day, Sir!</b></p>'; 
} elseif (isset($_POST['gender']) && $_POST['gender']=='F') { 
	$gender = $_POST['gender']; 
	echo '<p><b>Good day, Madam!</b></p>'; 
} else { 
	$gender = NULL; echo '<p class="error">You forgot to select your gender!</p>';
}

// Validate Age
if (!isset($age) || $age === '') {
	echo '<p class="text-danger">please select an age range</p>';
} else {
	$age = $_POST['age']; 
}
if ($age == '0-30') {
	echo '<p>Under 30</p>';
} 
else if($age == '30-60') {
	echo '<p>You are Between 30-60</p>';
}
else if($age == '60+') {
	echo '<p>You are over 60</p>';
} else {
	echo '<p class="text-danger">age option is not selected</p>';
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