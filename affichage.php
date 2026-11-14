<?php

function afficherTableau(array $montantsDirham, array $montantsEuro): void {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>N°</th>
            <th>Montant (MAD)</th>
            <th>Montant (EUR)</th>
          </tr>";

    for ($i = 0; $i < count($montantsDirham); $i++) {
        $euroFormate = number_format($montantsEuro[$i], 2, ',', '');
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $montantsDirham[$i] . "</td>";
        echo "<td>" . $euroFormate . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}