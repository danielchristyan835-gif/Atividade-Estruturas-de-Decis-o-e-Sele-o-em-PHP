<?php

$nota = (float) readline("Digite a nota do aluno: ");

if ($nota >= 7) {
    echo "Aprovado";  
}   elseif ($nota >= 5){
        echo "Recuperação";
    }   else {
            echo "Reprovado";
        }

?>