<?php
// Peça a temperatura e use if...else para exibir:
// • Menor que 15°C → "Frio"
// • Entre 15°C e 25°C → "Agradável"
// • Maior que 25°C → "Quente"

$temperatura = readline("Digite a temperatura em °C: ");

if ($temperatura < 15) {
    echo "Frio";
} elseif ($temperatura >= 15 && $temperatura <= 25) {
    echo "Agradável";
} else {
    echo "Quente";
}
