<?php
include 'conversion.php';
include 'somme.php';
include 'affichage.php';

$montantsDirham = [100, 250, 50, 300];
define('TAUX_EURO', 0.091);

$montantsEuro = convertir($montantsDirham, TAUX_EURO);
$totalEuro = calculerSomme($montantsEuro);

afficherTableau($montantsDirham, $montantsEuro);
echo "<p><strong>La somme en Euro est: " . $totalEuro . "</strong></p>";
?>