<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Predefined Variables</title>
</head>
<body>
<?php # Script 1.5 - predefined.php

// Create a shorthand version of the variable names:
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

// Print the name og the script:
echo "<p>You are running the file:<br><strong>$file</strong>.</p>\n";

// Print the user's information:
echo "<p>This server is running:<br><strong>$user</strong>.</p>\n";

// Print the server's information:
echo "<p>This server is running:<br>$server<strong></strong>.</p>\n";

?>
</body>
</html>