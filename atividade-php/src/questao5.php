<?php 

echo "Bem-vindo a nossa loja! \nEscolha umas das opções de atendimento:\n";
echo "1- Setor de Assistência \n";
echo "2- Setor de Montagem \n";
echo "3- Setor de Vendas \n";

$opcao = (int) readline("Digite a opção desejada: ");

switch ($opcao) {
    case 1:
        echo "Direcionando para o Setor de Assistência. \n";
        break;
    case 2:
        echo "Direcionando para o Setor de Montagem. \n";
        break;
    case 3:
        echo "Direcionando para o Setor de Vendas. \n";
        break;
    default:
        echo "Opção inválida. Por favor, escolha uma opção válida. \n";     
}
?>