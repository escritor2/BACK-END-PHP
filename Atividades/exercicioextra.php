<?php
// exercicioextra.php
// Algoritmo que lê 2 valores e verifica se são do mesmo tipo

// Função para determinar o tipo da variável
function getTipo($valor) {
    if (is_int($valor)) {
        return "inteiro";
    } elseif (is_float($valor)) {
        return "decimal";
    } elseif (is_string($valor)) {
        return "texto";
    } elseif (is_bool($valor)) {
        return "booleano";
    } elseif (is_array($valor)) {
        return "array";
    } elseif (is_null($valor)) {
        return "nulo";
    } else {
        return "desconhecido";
    }
}

// Interface para entrada de dados
echo "=== Verificador de Tipos de Variáveis ===\n";
echo "Digite o primeiro valor: ";
$valor1 = trim(fgets(STDIN));

echo "Digite o segundo valor: ";
$valor2 = trim(fgets(STDIN));

// Tenta interpretar o tipo dos valores digitados
// Para números inteiros
if (ctype_digit($valor1)) {
    $valor1 = (int)$valor1;
} elseif (is_numeric($valor1) && strpos($valor1, '.') !== false) {
    $valor1 = (float)$valor1;
}

if (ctype_digit($valor2)) {
    $valor2 = (int)$valor2;
} elseif (is_numeric($valor2) && strpos($valor2, '.') !== false) {
    $valor2 = (float)$valor2;
}

// Para booleanos
if (strtolower($valor1) === 'true') {
    $valor1 = true;
} elseif (strtolower($valor1) === 'false') {
    $valor1 = false;
}

if (strtolower($valor2) === 'true') {
    $valor2 = true;
} elseif (strtolower($valor2) === 'false') {
    $valor2 = false;
}

// Obtém os tipos dos valores
$tipo1 = getTipo($valor1);
$tipo2 = getTipo($valor2);

// Verifica se os tipos são iguais
if ($tipo1 === $tipo2) {
    echo "\nVariáveis de tipos iguais! Primeiro valor do tipo [$tipo1] e segundo valor do tipo [$tipo2]\n";
} else {
    echo "\nERRO! Variáveis de tipos diferentes. Primeiro valor do tipo [$tipo1] e segundo valor do tipo [$tipo2]\n";
}

// Exibe os valores para confirmação
echo "\nValores digitados:\n";
echo "Primeiro: " . var_export($valor1, true) . " (tipo: $tipo1)\n";
echo "Segundo: " . var_export($valor2, true) . " (tipo: $tipo2)\n";
?>
