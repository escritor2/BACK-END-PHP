<?php
$nota = readline("Digite a nota do aluno: ");
if ($nota >= 8) {
    echo "Aprovado com notas altas.";
} elseif ($nota >= 5) {
    echo "Aprovado com notas regulares.";
} else {
    echo "Reprovado.";
}
