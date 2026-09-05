<?php

echo "---- Calculadora ----\n";
$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");

echo "Opções de operações:\n";
echo "1- Adição\n";
echo "2- Subtração\n";
echo "3- Multiplicação\n";
echo "4- Divisão\n";

$opcao = (int) readline("Escolha a operação desejada (1-4): ");
switch ($opcao) {
    case 1:
        $resultado = $num1 + $num2;
        echo "Resultado da adição é: $resultado\n";
        break;
    case 2:
        $resultado = $num1 - $num2;
        echo "Resultado da subtração é: $resultado\n";
        break;
    case 3:
        $resultado = $num1 * $num2;
        echo "Resultado da multiplicação é: $resultado\n";
        break;
    case 4:
        $resultado = $num1 / $num2;
        echo "Resultado da divisão é: $resultado\n";
        break;
    default:
        echo "Opção inválida. Por favor, escolha uma operação válida.\n";  
}
?>