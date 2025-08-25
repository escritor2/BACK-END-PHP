<?php
//crie uma classe de moto com ao menos 4 atributos sem a utilização de um construtor
class moto {
    public $modelo;
    public $marca;
    public $ano;
    public $cor;

    //metodos
    public function trocarCor($nova_cor) {
        $this->cor = $nova_cor;
        return $this->cor;
    }
//criando sem a utilização de um construtor
    public function __construct($modelo, $marca, $ano, $cor) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
        $this->cor = $cor;
    }
}

//crie ao menos tres objetos para essa classe
$moto1 = new moto("Ninja ZX-10R", "Kawasaki", 2021, "Verde");
$moto2 = new moto("fazer 150", "Yamaha", 2020, "preta");
$moto3 = new moto("fan 160", "Honda", 2023, "azul");

// 3. Crie 3 construtores sendo:
//
// • 1° Construtor: Recebe 3 parâmetros sendo eles $dia, $mes e $ano;
// • 2° Construtor: Recebe 7 parâmetros sendo eles: $nome, $idade, $cpf,
//   $telefone, $endereco, $estado_civil e $sexo;
// • 3° Construtor: Recebe 5 parâmetros sendo eles: $marca, $nome,
//   $categoria, $data_fabricacao e $data_venda;
//
// OBS: Escreva o exercício 3 em forma de comentário.
 
//  public function __construct1($dia, $mes, $ano) {
//         $this->dia = $dia;
//         $this->mes = $mes;
//         $this->ano = $ano;
//     }

//     public function __construct2($nome, $idade, $cpf, $telefone, $endereco, $estado_civil, $sexo) {
//         $this->nome = $nome;
//         $this->idade = $idade;
//         $this->cpf = $cpf;
//         $this->telefone = $telefone;
//         $this->endereco = $endereco;
//         $this->estado_civil = $estado_civil;
//         $this->sexo = $sexo;
//     }

//     public function __construct3($marca, $nome, $categoria, $data_fabricacao, $data_venda) {
//         $this->marca = $marca;
//         $this->nome = $nome;
//         $this->categoria = $categoria;
//         $this->data_fabricacao = $data_fabricacao;
//         $this->data_venda = $data_venda;
//     }