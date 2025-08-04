<?php
#atividade 1 - Variáveis
/*Desenvolva um codigo com a mesma estrutura que o abaixo, porem com os seus dados.*/

echo "Olá! \n";
$nome ="Gabriel Ferreira \n";
$idade = 19;
$ano_atual ="2025";

$data_nascimento = $ano_atual - $idade;
echo $nome, "você nasceu em:" , $data_nascimento, "\n";

/*atividade 2 - Dado uma frase "Programação em php." transformá-la em maiúscula, imprima,
depois em minúscula e imprima de novo.*/
echo "\n--- Atividade 2 ---\n";
$frase = "programação em php.";
echo "Frase original: " . $frase . "\n";
echo "Em maiúscula: " . strtoupper($frase) . "\n";
echo "Em minúscula: " . strtolower($frase) . "\n";

/*atividade3 - Numa dada frase "O PHP foi criado em mil novecentos e noventa e cinco".
- Trocar o "O" (letra) por "0"(zero), o "a" por "4" e o "i" por "1".*/
echo "\n--- Atividade 3 ---\n";
$frase2 = "O PHP foi criado em mil novecentos e noventa e cinco";
echo "Frase original: " . $frase2 . "\n";
$frase_modificada = str_replace(
    ['O', 'a', 'i'],
    ['0', '4', '1'],
    $frase2
);
echo "Frase modificada: " . $frase_modificada . "\n";
?>
