<?php

echo "----Status do pedido----\n";
echo "1- Pedido em processamento \n";
echo "2- Localização do produto \n";

$opcao = (int) readline("Digite a opção desejada: ");
switch ($opcao) {
    case 1:
        echo "Seu pedido está sendo processado. \n";
        break;
    case 2:
        echo "O produto está localizado no estoque. \n";
        break;
    default:
        echo "Opção inválida. Por favor, escolha uma opção";
}

?>