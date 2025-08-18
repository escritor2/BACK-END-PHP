<?php

$marca_carro1 = "honda";
$modelo_carro1 = "civic";
$ano_carro1 ="2016";
$revisao_carro1 = "true";
$Ndonos_carro1 ="2";

$$marca_carro1 = "BMW";
$modelo_carro1 = "320i";
$ano_carro1 ="2012";
$revisao_carro1 = "false";
$Ndonos_carro1 ="3";

$marca_carro1 = "fiat";
$modelo_carro1 = "uno";
$ano_carro1 ="2005";
$revisao_carro1 = "false";
$Ndonos_carro1 ="unico dono";
$marca_carro1 = "volkswagen";
$modelo_carro1 = "jetta";
$ano_carro1 ="2020";
$revisao_carro1 = "true";
$Ndonos_carro1 ="7";

function revisaofeita($rev) {
    $rev = true;
    return $rev;
}

$revisao_carro3 = revisaofeita ($revisao_carro3, $qtde_donos2); //resultado true

function novodono($qtde_donos) {
    return $qtde_donos+1;

    $Ndonos_carro4= novodono( $Ndonos_carro4);
}

?>