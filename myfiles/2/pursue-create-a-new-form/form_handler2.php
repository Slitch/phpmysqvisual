<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hello, world!</title>
	<style>
html {
	font-family: arial, sans-serif;
}
table {
	font-family: arial, sans-serif;
  	border-collapse: collapse;
  	width: 100%;
}

td, th {
	font-family: arial, sans-serif;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
/*tr:nth-child(even) {
  background-color: #dddddd;
}*/
</style>
</head>
<body>
<?php # Pursue - Create form for project - handle_form.php

// set Variables for $_POST
$loen 				= $_POST['loen'];
$skattefradrag		= $_POST['skattefradrag'];
$am_bidrag			= $_POST['am_bidrag'];
$pensionsprocent	= $_POST['pensionsprocent'];
$atp 				= $_POST['atp'];
$traekprocent 		= $_POST['traekprocent'];

// Set variables for Not-Empty
// $e_loen 			= !empty($loen);
// $e_skattefradrag	= !empty($skattefradrag);
// $e_am_bidrag		= !empty($am_bidrag);
// $e_pensionsprocent	= !empty($pensionsprocent);
// $e_atp 		= !empty($atp);
// $e_traekprocent 	= !empty($traekprocent);

$pensionsprocent_res	= ($loen / 100) * $pensionsprocent;
$am_bidrag_res			= (($loen - $atp - $pensionsprocent_res) / 100) * $am_bidrag;
$nettoloen				= $loen - $atp - $pensionsprocent_res - $am_bidrag_res;

// A-indkomst er det belkøb som der skal betales skat af:
$a_indkomst				= $nettoloen;
$skatte_grundlag		= ($a_indkomst - $skattefradrag);

$betal_til_skat			= ( ($skatte_grundlag / 100) * $traekprocent );
$loen_til_udbetaling	= $nettoloen - $betal_til_skat;

// Penge function som formatere beløbene korrekt med komma, punktum og 2 decimaltal
function m($a) {
	return number_format($a , 2, ',','.');
}
// fl function runder tallet ned
function fl($b) {
	return number_format(floor($b) , 2, ',','.');
}

	echo '
	<table class="table">
	<thead>
		<tr>
			<th scope="col">Type</th>
      		<th scope="col">Beløb</th>
    	</tr>
    </thead>
    <tbody>
    <tr>
    	<td>Løn (før skat osv.):</td>
		<td>' . m($loen) . '</td>
    </tr>
    <tr>
    	<td>ATP:</td>
    	<td>' . m($atp) . '</td>
    </tr>
    <tr>
    	<td>AM-pension:</td>
    	<td>' . m($pensionsprocent_res) . '</td>
    </tr>
    <tr>
    	<td>AM-bidrag:</td>
    	<td>' . m($am_bidrag_res) . '</td>
    </tr>
    <tr>
    	<td>Nettoløn:</td>
    	<td>' . m($nettoloen) . '</td>
    </tr>
    <tr>
    	<td>A-indkomst (skattepligtige):</td>
    	<td>' . m($a_indkomst) . '</td>
    </tr>
    <tr>
    	<td>Månedligt fradrag:</td>
    	<td>' . m($skattefradrag) . '</td>
    </tr>
    <tr>
    	<td>Betales til skat:</td>
    	<td>' . m($betal_til_skat) . '</td>
    </tr>
    <tr>
    	<td>Løn til udbetaling:</td>
    	<td>' . m($loen_til_udbetaling) . '</td>
    </tr>
  </tbody>
</table>
	</div>
	<div role="alert">
	<h4>Udbetaling:</h4>
	<p><strong>Kildeskatteloven:</strong> Af det beløb, der efter foranstående skal udbetales den skattepligtige, udbetales kun det hele kronebeløb.</p>
	<p>Det betyder at der skal rundes ned til hele kronebeløb uanset hvor stor øre beløber er.</p>
	<hr>
	<p>Nettoudbetalt (efter skat) / måned: ' . fl($loen_til_udbetaling) . '</p>
	</div>';

// ========== END OF PHP SCRIPT ==========
?>
<button type="submit" name="submit">Beregn udbetaling</button>
<button link="form2.html">Ny beregning</button>
<div>
<a href="form2.html">Ny beregning</a>
</div>
</div>

</body>
</html>