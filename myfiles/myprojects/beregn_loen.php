<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	<title>Lønberegner</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
	<style type="text/css">
		
	body {
	    font-family: 'Roboto',-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;
	    font-size: 1rem;
	    font-weight: 300;
	    line-height: 1.5;
	    color: 
	    #001932;
	    text-align: left;
	}
	</style>
</head>
<body>
<?php # Løn beregner
// $number = 1234.56;
// $nombre_format_danish = number_format($number, 2, ',','.');

// money_format ( string $format , float $number ) : string


$tal_tester = 25000000.1236;

// regn original
$fradrag					= 3480.0;
$skatprocent 				= -37.0;
$loen_foer_skat				= 15180.0;;
$atp_opsparing				= -95;
$a_indkomst					= ($loen_foer_skat + $atp_opsparing);

$betal_til_skat				= (($a_indkomst - $fradrag) * ($skatprocent/100));
$udbetalt					= ($a_indkomst + $betal_til_skat);

// regn 1
$fradrag1					= 3480.0;
$skatprocent1 				= 37.0;
$loen_foer_skat1			= 15180.0;;
$atp_opsparing1				= 95;
$a_indkomst1				= ($loen_foer_skat1 - $atp_opsparing1);
$beloeb_vi_betaler_skat_af1 = $a_indkomst1 - $fradrag1;
$betal_til_skat1			= (($a_indkomst1 - $fradrag1) * ($skatprocent1/100));
$udbetalt1					= ($a_indkomst1 - $betal_til_skat1);
$skat_100					= $skatprocent1 / 100;
$efter_skat					= $beloeb_vi_betaler_skat_af1 - $betal_til_skat1;

// Penge function som formatere beløbene korrekt med komma, punktum og 2 decimaltal
function m($a) {
	return number_format($a , 2, ',','.');
}
// fl function runder tallet ned
function fl($b) {
	return number_format(floor(	$b) , 2, ',','.');
}
// number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," ) : string
// number_format ( float $number [, int $decimals = 0 ] ) : string


// regn 1
// echo 'Fradrag: ' . number_format($fradrag1 , 2, ',','.') . '<br>';
echo 'Fradrag: ' . m($fradrag1) . '<br>';
echo 'Skat procent: ' . m($skatprocent1) . '<br>';
echo 'Løn før skat: ' . m($loen_foer_skat1) . '<br>';
echo 'atp: ' . m($atp_opsparing1) . '<br>';
echo 'A-indkomst: ' . m($a_indkomst1) . '<br>';
echo '------------------------------------------------------<br>';


echo 'For at regne ud hvad man får udbetalt så skal vi..<br>';
echo 'først trække ATP fra "Løn før skat". resultatet af det kaldes for A-indkomst.<br>';
echo '"Løn før skat" - ATP = A-indkomst.<br>';
echo  m($loen_foer_skat1) . ' - ' . m($atp_opsparing1) .  ' = ' . m($a_indkomst1) . '<br>';
echo 'så nu skal vi trække "Fradrag" fra A-indkomst og derefter regne ud hvad vi "betaler til skat" og trække det fra A-indkomst, og til sidst pluse fradrag på ingen.<br>';
echo 'A-indkomst - fradrag = "beløb vi betaler skat af".<br>';
echo m($a_indkomst1) . ' - ' . m($fradrag1) .' = ' . m($beloeb_vi_betaler_skat_af1) . '<br>'; 
echo 'Så nu skal vi regne ud hvad vi "betaler til skat".<br>';
echo '"beløb vi betaler skat af" * ("Skat procent"/100) = "betaler til skat"<br>';
echo 'Når vi har pareteser ( ) så skal vi huske at regen det ud som står i parenteserene først<br>';
echo '"beløb vi betaler skat af" * (' . $skatprocent1 . '/100) = "betaler til skat"<br>';
echo '"beløb vi betaler skat af" * ' . m($skat_100) . ' = "betaler til skat".<br>';
echo m($beloeb_vi_betaler_skat_af1) . ' * ' .  m($skat_100) . ' = ' . m($betal_til_skat1) . '<br>';
echo 'Vi skal betale ' . m($betal_til_skat1) . ' til skat.<br>';
echo '"betaler til skat" skal nu trækkes fra "beløb vi betaler skat af" og derefter lægger vi "Fradrag" på igen<br>';
echo 'Først trække vi skat fra.<br>';
echo m($beloeb_vi_betaler_skat_af1) . ' - ' . m($betal_til_skat1) . ' = ' . m($efter_skat) . '<br>';
echo 'Så lægger vi "fradrag" på igen.<br>';
echo m($efter_skat) . ' - ' . m($fradrag1) . ' = ' . m($udbetalt1) . '<br>';

echo '<br><br>';

// regn original
echo '<p>A-indkomst: ' . 		m($a_indkomst) . '</p>';
// echo '<p>A-indkomst: ' . 		money_format(n,$a_indkomst) . '</p>';
echo '<p>Skat: ' . 				m($betal_til_skat) . '</p>';
echo '<p>Udbetalt: ' . 			m($udbetalt) . '</p>';
echo '<p>Udbetalt (afrund): ' . fl($udbetalt) . '</p>';
echo '<p>Tal test: ' . 			m($tal_tester) . '</p>';
echo '<p>Tal test: ' . 			fl($tal_tester) . '</p>';

?>
</body>
</html>