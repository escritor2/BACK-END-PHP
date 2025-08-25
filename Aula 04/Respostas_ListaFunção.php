<?php
$marca_carro1 = "honda";
$modelo_carro1 = "civic";
$ano_carro1 ="2016";
$revisao_carro1 = true;
$Ndonos_carro1 = 2;

$marca_carro1 = "BMW";
$modelo_carro1 = "320i";
$ano_carro1 = "2012";
$revisao_carro1 = false;
$Ndonos_carro1 = 3;

$marca_carro1 = "fiat";
$modelo_carro1 = "uno";
$ano_carro1 = "2005";
$revisao_carro1 = false;
$Ndonos_carro1 = 1;

$marca_carro1 = "volkswagen";
$modelo_carro1 = "jetta";
$ano_carro1 = "2020";
$revisao_carro1 = true;
$Ndonos_carro1 = 7;


// Exercício 1 -
function exibirCarro($modelo, $marca, $ano, $revisao, $Ndonos) {
    $revisaoTexto = $revisao ? "Sim" : "Não";
    echo "O carro $marca $modelo, ano $ano, já passou por revisão: $revisaoTexto, número de donos: $Ndonos\n";
}

// Exercício 2 -
function ehSeminovo($ano) {
    $anoAtual = date('Y');
    return ($anoAtual - $ano) <= 3;
}

// Exercício 3 
function precisaRevisao($revisao, $ano) {
    if (!$revisao && $ano < 2022) {
        return "Precisa de revisão";
    } else {
        return "Revisão em dia";
    }
}

// Exercício 4 -


$marca_carro1 = "honda";
$modelo_carro1 = "civic";
$ano_carro1 = "2016";
$revisao_carro1 = true;
$Ndonos_carro1 = 2;

$marca_carro2 = "BMW";
$modelo_carro2 = "320i";
$ano_carro2 = "2012";
$revisao_carro2 = false;
$Ndonos_carro2 = "3";

$marca_carro3 = "fiat";
$modelo_carro3 = "uno";
$ano_carro3 = "2005";
$revisao_carro3 = false;
$Ndonos_carro3 = 1; 

$marca_carro4 = "volkswagen";
$modelo_carro4 = "jetta";
$ano_carro4 = "2020";
$revisao_carro4 = true;
$Ndonos_carro4 = 7;


/**
 * Calcula o valor estimado de um carro com base na marca, ano e número de donos.
 *
 * @param string $marca Marca do carro.
 * @param int|string $ano Ano de fabricação do carro.
 * @param int|string $Ndonos Número de donos anteriores.
 * @return float Valor estimado do carro.
 */
function calcularValor($marca, $ano, $Ndonos) {
    $marcaUpper = strtoupper($marca);
    
    switch ($marcaUpper) {
        case 'HONDA':
            $precoBase = 30000;
            break;
        case 'FIAT':
            $precoBase = 15000;
            break;
        case 'VOLKSWAGEN':
            $precoBase = 70000;
            break;
        case 'BMW':
            $precoBase = 50000;
            break;
        default:
            $precoBase = 5000; 
    }
}
    ?>
    