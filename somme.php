<?php

function calculerSomme(array $montantsEuro): string {
    $somme = array_sum($montantsEuro);
    return number_format($somme, 2, ',', '');
}