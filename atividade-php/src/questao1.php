<?php

$taxafixa = 10.00;
$distancia = (float) readline("Digite a distancia percorrida: ");

if ($distancia >= 0) {
    $valortotal = $taxafixa + ($distancia * 2.50);
    echo "O valor total da corrida é: R$ " . $valortotal . "\n";
} else {
    echo "Distancia inválida.\n";
}

?>