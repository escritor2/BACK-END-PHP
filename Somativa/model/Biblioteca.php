<?php

Class Livro {
    private $titulo;
    private $autor;
    private $genero;
    private $anoPublicacao;
    private $quantidade;

    public function __construct($titulo, $autor, $genero, $anoPublicacao, $quantidade) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->anoPublicacao = $anoPublicacao;
        $this->quantidade = $quantidade;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setAnoPublicacao($anoPublicacao) {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
}