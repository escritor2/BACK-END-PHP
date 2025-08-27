<?php

function exibirMenu() {
    echo "\n=== MENU INTERATIVO ===\n";
    echo "1. Olá\n";
    echo "2. Data Atual\n";
    echo "3. Sair\n";
    echo "======================\n";
    echo "Escolha uma opção: ";
}


for ($i = 0; $i < 5; $i++) { 
    exibirMenu();
    $opcao = trim(fgets(STDIN));
    
    switch ($opcao) {
        case 1:
            echo "\nOlá! Seja bem-vindo ao sistema!\n";
            break;
            
        case 2:
            date_default_timezone_set('America/Sao_Paulo');
            $dataAtual = date('d/m/Y H:i:s');
            echo "\nData e hora atual: $dataAtual\n";
            break;
            
        case 3:
            echo "\nSaindo do sistema... Até logo!\n";
            exit(0);
            
        default:
            echo "\nOpção inválida! Por favor, escolha 1, 2 ou 3.\n";
    }
    
}
?>