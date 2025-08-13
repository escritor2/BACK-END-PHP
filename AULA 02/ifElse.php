<?php
// Programação ifElse para verificar aprovação/reprovação
// Notas 7 ou maiores = Aprovado
// Notas menores que 7 = Reprovado
// caso o aluno tenha o nome "enzo enrico" , ele sera aprovado independente da media e presença. crie uma variavel $nome

// Variáveis do aluno
$nome = "enzo enrico"; // Você pode alterar este nome para testar diferentes casos
$nota = 5.5; // Você pode alterar esta nota para testar diferentes casos

// Verificação de aprovação/reprovação
if (strtolower($nome) === "enzo enrico") {
    echo "Aluno: $nome\n";
    echo "Status: APROVADO (por nome especial)\n";
    echo "Nota: $nota\n";
    echo "Parabéns! Você foi aprovado independentemente da sua nota.\n";
} elseif ($nota >= 7) {
    echo "Aluno: $nome\n";
    echo "Nota: $nota\n";
    echo "Status: APROVADO\n";
    echo "Parabéns! Você foi aprovado com nota $nota.\n";
} else {
    echo "Aluno: $nome\n";
    echo "Nota: $nota\n";
    echo "Status: REPROVADO\n";
    echo "Infelizmente você foi reprovado. Sua nota foi $nota, precisando de pelo menos 7 para ser aprovado.\n";
}

// Teste com diferentes valores
echo "\n--- Testes ---\n";

// Teste 1: Aluno comum aprovado
$nome1 = "João Silva";
$nota1 = 8.5;
echo "Teste 1 - Aluno: $nome1, Nota: $nota1 - ";
if (strtolower($nome1) === "enzo enrico") {
    echo "APROVADO (especial)\n";
} elseif ($nota1 >= 7) {
    echo "APROVADO\n";
} else {
    echo "REPROVADO\n";
}

// Teste 2: Aluno comum reprovado
$nome2 = "Maria Santos";
$nota2 = 6.0;
echo "Teste 2 - Aluno: $nome2, Nota: $nota2 - ";
if (strtolower($nome2) === "enzo enrico") {
    echo "APROVADO (especial)\n";
} elseif ($nota2 >= 7) {
    echo "APROVADO\n";
} else {
    echo "REPROVADO\n";
}

// Teste 3: Aluno especial com nota baixa
$nome3 = "Enzo Enrico";
$nota3 = 4.0;
echo "Teste 3 - Aluno: $nome3, Nota: $nota3 - ";
if (strtolower($nome3) === "enzo enrico") {
    echo "APROVADO (especial)\n";
} elseif ($nota3 >= 7) {
    echo "APROVADO\n";
} else {
    echo "REPROVADO\n";
}
?>
