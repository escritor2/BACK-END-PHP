<?php
// Solicite ao usuário um número e use for para exibir sua tabuada de 1 a 10.

// Solicita um número ao usuário
echo "Digite um número para ver sua tabuada: ";
$numero = trim(fgets(STDIN));

// Valida se é um número
if (!is_numeric($numero)) {
    echo "Por favor, digite um número válido.\n";
    exit;
}

$numero = (int)$numero;

// Exibe a tabuada do número de 1 a 10
echo "\nTabuada de $numero:\n";
echo str_repeat("-", 20) . "\n";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}

echo str_repeat("-", 20) . "\n";
?>
