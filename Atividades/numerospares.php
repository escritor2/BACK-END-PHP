<?php
// Peça um número final e use for para exibir todos os números pares de 0 até esse numero

if (isset($_POST['numeroFinal'])) {
    $numeroFinal = intval($_POST['numeroFinal']);
    
    echo "Números pares de 0 até $numeroFinal:<br>";
    
    for ($i = 0; $i <= $numeroFinal; $i += 2) {
        echo $i . "<br>";
    }
} else {
    echo "erro";
}
?>