<?php
class carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_donos;

    public function __construct($marca, $modelo, $ano, $revisao, $N_donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->N_donos = $N_donos;
    }
}

$carro1 = new carro("Porsche", "911", "2020", "false", 3);
$carro2 = new carro("Mitsubishi", "lancer", "1945", "true", 1);
$carro3 = new carro("Fusca", "1300", "1970", "false", 2);
$carro4 = new carro("Ferrari", "488", "2021", "false", 1);
$carro5 = new carro("Chevrolet", "Onix", "2022", "true", 4);
$carro6 = new carro("Volkswagen", "Gol", "2019", "true", 5);
