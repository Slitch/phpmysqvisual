<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <title>Beregn din løn</title>
</head>
<body class="bg-light">
  <div class="container">
<?php # Pursue - Create form for project - handle_form.php

// set Variables for $_POST
$loen               = $_POST['loen'];
$skattefradrag      = $_POST['skattefradrag'];
$am_bidrag          = $_POST['am_bidrag'];
$am_pension         = $_POST['am_pension'];
$atp                = $_POST['atp'];
$traekprocent 		  = $_POST['traekprocent'];

$n_loen             = is_numeric($loen);
$n_skattefradrag    = is_numeric($skattefradrag);
$n_am_bidrag        = is_numeric($am_bidrag);
$n_am_pension       = is_numeric($am_pension);
$n_atp              = is_numeric($atp);
$n_traekprocent     = is_numeric($traekprocent);

// Validate all for not empty
if (  $n_loen && 
      $n_skattefradrag && 
      $n_am_bidrag && 
      $n_am_pension && 
      $n_atp && 
      $n_traekprocent ) 
{ // Do all this code

  $am_pension_res         = ($loen / 100) * $am_pension;
  $am_bidrag_res          = (($loen - $atp - $am_pension_res) / 100) * $am_bidrag;
  $nettoloen              = $loen - $atp - $am_pension_res - $am_bidrag_res;

    // A-indkomst er det belkøb som der skal betales skat af:
  $a_indkomst             = $nettoloen;
  $skatte_grundlag        = ($a_indkomst - $skattefradrag);

  $betal_til_skat         = ( ($skatte_grundlag / 100) * $traekprocent );
  $loen_til_udbetaling    = $nettoloen - $betal_til_skat;

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
        <td>' . m($am_pension_res) . '</td>
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
  <div role="alert">
    <h4>Udbetaling:</h4>
    <p><strong>Kildeskatteloven:</strong> Af det beløb, der efter foranstående skal udbetales den skattepligtige, udbetales kun det hele kronebeløb.</p>
    <p>Det betyder at der skal rundes ned til hele kronebeløb uanset hvor stor øre beløber er.</p>
    <hr>
    <p>Nettoudbetalt (efter skat) / måned: <strong>' . fl($loen_til_udbetaling) . '</strong></p>
  </div>
  <button type="submit" name="submit">Beregn udbetaling</button>
  <a href="form2.html">Ny beregning</a>
  ';
} else {
  echo '
  <p class="text-danger">Ufyld alle felterne kun med tal.</p>
  <a href="form2.html">Prøv igen</a>
  ';
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