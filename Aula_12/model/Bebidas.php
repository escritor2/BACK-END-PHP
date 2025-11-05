<?php

class Bebidas {
    private $nome;
    private $categoria;
    private $volume;
    private $valor;
    private $quantidade;

    public function __construct($nome, $valor, $categoria, $volume, $quantidade) {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->categoria = $categoria;
        $this->volume = $volume;
        $this->quantidade = $quantidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}