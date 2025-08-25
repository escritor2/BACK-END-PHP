<?php

class produtos {
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

    //metodos
    public function atualizarEstoque($qtde_vendida) {
        $this->qtde_estoque = $this->qtde_estoque - $qtde_vendida;
        return $this->qtde_estoque;
    }
    //criando construtor
    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque) {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }
}
//criando objetos sem construtor feito
$produto1 = new produtos();
$produto1->nome = "suco tang";
$produto1->categoria = "bebidas";
$produto1->fornecedor = "mondelez";
$produto1->qtde_estoque = "200";

$produto2 = new produtos();
$produto2->nome = "energetico monster";
$produto2->categoria = "bebidas";
$produto2->fornecedor = "coca-cola";
$produto2->qtde_estoque = "150";
//criando objetos com construtor feito
$produto1 = new produtos ("Suco tang","bebidas", "mondelez", 200);
$produto2 = new produtos ("energetico monster", "bebidas", "coca-cola", 150);
