<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$randomNumbers = [];

while (count($randomNumbers) < 15) {
    $singleNum = rand(1, 20);

    if (!in_array($singleNum, $randomNumbers)) {
        $randomNumbers[] = $singleNum;
    }
}

var_dump($randomNumbers);

?>