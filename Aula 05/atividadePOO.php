<?php
//crie uma classe (molde de objetos) chamada 'cachorro' com os seguintes atributos: nome, idade, raça, castrado, sexo.
//Apos a cdriação da classe, crie 10 cachorros(10 objetos)
// apos a conclusao dos exercicios 1 e 2, crie uma nova classe chamada 'usuario' com os atributos: nome, cpf, sexo, email, estado civil, cidade, estado, endereço e cep.
//crie 3 objetos seguindo as seguintes informações
//usuario 1:
class cachorro {
    public $nome;
    public $idade;
    public $raca;
    public $castrado;
    public $sexo;

    public function __construct($nome, $idade, $raca, $castrado, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
    }
}

$cachorro1 = new cachorro("rex", "5","labrador", "true", "macho");
$cachorro2 = new cachorro("bela", "2", "pincher", "true","femea");
$cachorro3 = new cachorro("toto", "3", "poodle", "false", "macho");
$cachorro4 = new cachorro("lola", "1", "bulldog", "true", "femea");
$cachorro5 = new cachorro("max", "4", "beagle", "false", "macho");
$cachorro6 = new cachorro("luna", "6", "golden retriever", "true", "femea");
$cachorro7 = new cachorro("bobby", "2", "chihuahua", "false", "macho");
$cachorro8 = new cachorro("pingo", "3", "vira-lata", "true", "macho");
$cachorro9 = new cachorro("lili", "1", "shih tzu", "true", "femea");
$cachorro10 = new cachorro("tina", "5", "cocker spaniel", "false", "femea");