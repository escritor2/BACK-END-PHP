<?php
class Animal {
    private $especie;
    private $habitat;
    private $sexo;
    private $alimentacao;

    // Construtor
    public function __construct($especie, $habitat, $sexo, $alimentacao) {
        $this->setEspecie($especie);
        $this->setHabitat($habitat);
        $this->setSexo($sexo);
        $this->setAlimentacao($alimentacao);
    }

    // Getter e Setter da espécie
    public function getEspecie() {
        return $this->especie;
    }
    public function setEspecie($especie) {
        $this->especie = $especie;
    }

    // Getter e Setter do habitat
    public function getHabitat() {
        return $this->habitat;
    }
    public function setHabitat($habitat) {
        $this->habitat = $habitat;
    }

    // Getter e Setter do sexo
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    // Getter e Setter da alimentação
    public function getAlimentacao() {
        return $this->alimentacao;
    }
    public function setAlimentacao($alimentacao) {
        $this->alimentacao = $alimentacao;
    }
    
}

class cachorro extends Animal {
    private $raca;

    public function __construct($raca, $especie, $habitat, $sexo, $alimentacao) {
        parent ::__construct($especie, $habitat, $sexo, $alimentacao);
        $this->raca = $raca;
    }
    public function getRaca() {
        return $this->raca;
    }
    public function setRaca($raca) {
        $this->raca = $raca;
    }
}

class pangolim extends Animal {
    private $N_escamas;

    public function __construct( $especie, $habitat, $sexo, $alimentacao){
        parent::__construct( $especie, $habitat, $sexo, $alimentacao);

        $this->N_escamas = $N_escamas;
    }
}

class macaco extends Animal {
    private $tempo_dormindo;
    private $qtde_bananas_dia;

    public function __construct( $tempo_dormindo, $qtde_bananas_dia ) {
        parent::__construct( $especie, $habitat, $sexo, $alimentacao, $tempo_dormindo, $qtde_bananas_dia );

        $this->tempo_dormindo = $tempo_dormindo;
        $this->qtde_bananas_dia = $qtde_bananas_dia;
    }
}

//crie uma classe filha "gato" para a classe "animal"contendo o atributo " tipo_ronronamento"

class Gato extends Animal {
    private $tipo_ronronamento;

    public function __construct($tipo_ronronamento, $especie, $habitat, $sexo, $alimentacao) {
        parent::__construct($especie, $habitat, $sexo, $alimentacao);
        $this->tipo_ronronamento = $tipo_ronronamento;
    }

    public function getTipoRonronamento() {
        return $this->tipo_ronronamento;
    }
    public function setTipoRonronamento($tipo_ronronamento) {
        $this->tipo_ronronamento = $tipo_ronronamento;
    }
}
