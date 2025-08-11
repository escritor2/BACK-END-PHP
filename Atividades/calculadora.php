<?php
// Peça dois números e uma operação (+, -, *, /).
// • Use switch...case para realizar a operação e exibir o resultado.

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];
    
    // Valida se os números são válidos
    if (is_numeric($num1) && is_numeric($num2)) {
        $num1 = floatval($num1);
        $num2 = floatval($num2);
        $resultado = 0;
        
        // Realiza a operação usando switch...case
        switch ($operacao) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;
            case '/':
                // Verifica divisão por zero
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $erro = "Erro: Divisão por zero não é permitida!";
                }
                break;
            default:
                $erro = "Operação inválida!";
        }
    } else {
        $erro = "Por favor, insira números válidos!";
    }
}
?>