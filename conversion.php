<?php

function convertir(array $montants, float $taux): array {
    $montantsEuro = [];

    foreach ($montants as $montant) {
        $montantsEuro[] = $montant * $taux;
    }

    return $montantsEuro;
}