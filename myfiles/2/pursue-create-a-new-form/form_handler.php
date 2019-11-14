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
<?php # Pursue - Create form for project - handle_form.php


// Variabler for $_POST
$loen_foer_skat 	= $_POST['loen_foer_skat'];
$fradrag_pr_md		= $_POST['fradrag_pr_md'];
$traekprocent 		= $_POST['traekprocent'];
$atp_pr_md 			= $_POST['atp_pr_md'];

// Beregn A-Indkomst
$a_indkomst			= ($loen_foer_skat - $atp_pr_md);
$betal_til_skat 	= (($a_indkomst - $fradrag_pr_md) * ($traekprocent/100));
$udbetalt			= ($a_indkomst - $betal_til_skat);

// Penge function som formatere beløbene korrekt med komma, punktum og 2 decimaltal
function m($a) {
	return number_format($a , 2, ',','.');
}
// fl function runder tallet ned
function fl($b) {
	return number_format(floor(	$b) , 2, ',','.');
}

// Print de forskellige tal:
echo '
<p>A-Indkomst: ' . m($a_indkomst) . '</p>
<p>Betal til skat: ' . m($betal_til_skat) . '</p>
<p>Løn resultat: ' . m($udbetalt) . '</p>
<div class="alert alert-success" role="alert">
<hr>
<p>Nettoudbetalt (efter skat) / måned: ' . fl($udbetalt) . '
</div>';

echo '
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>';
/*

betal til skat

udbetalt

*/

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