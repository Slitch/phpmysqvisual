<?php # Script 3.5 - calculator.php

$page_title = 'Trip Cost Calculator';
include('includes/header.html');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// Minimal form validation:
	if ( isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency'] ) && is_numeric($_POST['distance']) && 
		is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency']) ) {

			// Calculate the result:
			$gallons = $_POST['distance'] / $_POST['efficiency'];
			$dollars = $gallons * $_POST['gallon_price'];
			$hours = $_POST['distance'] / 65;

			// Print the result:
			echo '<div class="page_header"><h1>Total Estimated Cost</h1></div>
			<p>The total cost of driving ' . $_POST['distance'] . ' miles, average ' . $_POST['efficiency'] . ' miles per gallon, and paying and average of $' . $_POST['gallon_price'] . ' per gallon, is $' . number_format($dollars, 2) . '. If you drive at an average of 65 miles per hour, the trip will take approximately ' . number_format($hours, 2) . ' hours. </p>';
	
	} else { // Invalid submitted values.
		echo '<div class="page-header"><h1>Error!</h1></div>
		<p class="text-danger">Please enter a valid distance, price per gallon, and fuel efficiency.</p>';
	}

} // END of main submission IF.

// Leave the PHP section and create the HTML form:
?>

<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="calculator.php" method="post">

	<div class="form-group">
    <label for="distanceId">Distance (in miles): </label>
    <input class="form-control" type="number" name="distance" id="distanceId" placeholder="Type in the distance her">
  </div>

	<label>Ave. Price Per Gallon:</label>
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="gallon_price" id="radios1" value="3.00" checked>
	  <label class="form-check-label" for="radios1">
	    3.00
	  </label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="gallon_price" id="radios2" value="3.50">
	  <label class="form-check-label" for="radios2">
	  	3.50
	  </label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="gallon_price" id="radios3" value="4.00">
	  <label class="form-check-label" for="radios3">
	    4.00
	  </label>
	</div>
	<br>

	<div class="form-group">
    <label for="fuelEfficiency">Fuel efficiency: </label>
    <select class="form-control" id="fuelEfficiency" name="efficiency">
      <option value="10">Terrible</option>
			<option value="20">Decent</option>
			<option value="30">Very Good</option>
			<option value="50">Outstanding</option>
    </select>
  </div>

	<p><input type="submit" name="submit" value="Calculate!"></p>
</form>

<?php include('includes/footer.html'); ?>