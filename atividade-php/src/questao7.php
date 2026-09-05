<?php

$valorcompra = (float) readline("Digite o valor da compra: ");

if ($valorcompra <= 100.00) {
    $porcentagem = 0;
    echo "Desconto não aplicado. O valor total da compra é: R$ " . $valorcompra. "\n";
}   elseif ($valorcompra <= 300.00) {
            $porcentagem = 10;
            $valordesconto = $valorcompra * ($porcentagem / 100);
            $valortotal = $valorcompra - $valordesconto;
            echo "O valor total da compra com desconto de 10% é: R$ " . $valortotal. "\n";
    }   else {
            $porcentagem = 20;
            $valordesconto = $valorcompra * ($porcentagem / 100);
            $valortotal = $valorcompra - $valordesconto;
            echo "O valor total da compra com desconto de 20% é: R$ " . $valortotal. "\n";

    }
?>