<?php

$valorcompra = (float) readline("Digite o valor da compra: ");

if ($valorcompra <= 80.00) {
    $frete = 20;
    $valortotal = $valorcompra + $frete;
    echo "O valor total da compra com frete adicionado é: R$ " . $valortotal. "\n";
}   elseif ($valorcompra <= 120.00) {
        $frete = 10;
        $valortotal = $valorcompra + $frete;
        echo "O valor da compra com frete adicionado é: R$ " . $valortotal. "\n";
    }   else {
            $frete = 0.00;
            echo "O valor da compra com frete grátis é: R$ " . $valorcompra. "\n";
        } 

?>