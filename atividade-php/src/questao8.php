<?php

echo "---- LOGIN ----\n";
$usuario = (string) readline("Digite o nome do usuário: ");
$senha = (string) readline("Digite a senha: ");

if ($usuario == "Usuário44" && $senha == "Senha44") {
    echo "Acesso permitido. Bem-vindo, $usuario!\n";
}   else {
        echo "Acesso negado. Usuário ou senha incorretos.\n";
    }
?>