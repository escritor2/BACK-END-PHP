<?php

// exercicios 1 ao 5

// exercicio 1

class carro {
    private $marca;
    private $modelo;

    function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    function get_marca() {
        return $this->marca;
        return $this->modelo;
    }
    function set_marca($marca) {
        $this->marca = $marca;
    }
    function get_modelo() {
        return $this->modelo;   
    }
    function set_modelo($modelo) {
        $this->modelo = $modelo;
    }

}
//criando objeto da classe/ atribuindo valores
$carro= new carro("toyota", "corola");
//exibir valores
echo "marca" . $carro->get_marca() ."<br>";
echo"modelo" . $carro->get_modelo() ."<br>";

//exercicio 2

class pessoa {
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome, $idade, $email) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }
    public function get_nome() {
        return $this->nome;
    }
    public function set_nome($nome) {
        $this->nome = $nome;
    }
    public function get_idade() {
        return $this->idade;
    }
    public function set_idade($idade) {
        $this->idade = $idade;
    }
    public function get_email() {
        return $this->email;
    }
    public function set_email($email) {
        $this->email = $email;
    }

}
    //criando objetod e atribuindo valores
    $pessoa = new pessoa("gabriel","45 anos", "ola@gmail.com");
    //exibir valores
    echo"nome" . $pessoa->get_nome() ."<br>";
    echo "idade" . $pessoa->get_idade() ."<br>";
    echo "email". $pessoa->get_email() ."<br>";

    //exercicio 3

class aluno {
    private $nome;
    private $nota;

    public function __construct($nome, $nota) {
        $this->nome = $nome;
        $this->nota = $nota;
    }
    public function get_nome() {
        return $this->nome;
    }
    public function set_nome($nome) {
        $this->nome = $nome;
    }
    // setter para nota if e else
    public function SetNota($nota) {
        if ($nota>=0 && $nota<= 10) {
            $this->nota = $nota;
        } else {
            $this->nota = 0;
        }
}
public function get_nota() {
    return $this->nota;
}
}
$aluno = new aluno("ana", "");

$aluno = new Aluno("pedro", "15");

echo "Aluno: " . $aluno1->getNome() . " - Nota: " . $aluno1->getNota() . "<br>";
echo "Aluno: " . $aluno2->getNome() . " - Nota: " . $aluno2->getNota();

// exercicio 4

class produto {
    private $nome;
    private $preco;
    private $nota;

    public function __construct($nome, $preco, $nota) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->nota = $nota;
    }
    public function setNome ($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setPreco ($preco) {
        $this->preco = $preco;
    }
    public function getPreco() {
        return $this->preco;
    }
    public function setnota ($nota) {
        $this->nota = $nota;
    }
    public function getnota() {
        return $this->nota;
    }
}

$produto = new produto("nootbook gamer" , "4500", "12");

echo "O produto " . $produto->getNome() . 
     " custa R$ " . number_format($produto->getPreco(), 2, ',', '.') . 
     " e possui " . $produto->getNota() . " unidades em estoque.";

