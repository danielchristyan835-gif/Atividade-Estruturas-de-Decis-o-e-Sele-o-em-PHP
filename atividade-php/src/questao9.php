<?php

$temp = (float) readline("Digite a temperatura: ");

if ($temp < 28) {
    echo "Está frio";
}   elseif ($temp <= 34) {
    echo "Está quente";
    }   else {
            echo "Está muito quente";
        }   
?>