<?php

$nome = "Enso Enrico";

echo" Boa tarde!";
$nota1 = readline(prompt: "Digite a primeira nota: "); 
$nota2 = readline(prompt: "Digite a segunda nota: ");
$presença = readline(prompt: "Digite a presença (0 a 100): ");
$media = ($nota1 + $nota2) / 2;

if ($media >= 7 && $presença >= 75) {
    echo "Parabéns, $nome! Você foi aprovado com média $media e presença $presença%.\n";
} elseif ($media < 7 && $presença >= 75) {
    echo "Infelizmente, $nome, você não foi aprovado. Sua média foi $media e sua presença foi $presença%.\n";
} elseif ($presença < 75) {
    echo "Infelizmente, $nome, você não foi aprovado por falta. Sua presença foi apenas $presença%.\n";
} elseif ($presenÃ§a < 0 || $presença > 100) {
    echo "Erro: A presença deve estar entre 0 e 100.\n";
} else {
    echo "Erro desconhecido.\n";
}