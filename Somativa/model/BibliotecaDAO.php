<?php
require_once __DIR__ . '/../model/Biblioteca.php';
Class BibliotecaDAO {
    private $livros = [];

    public function lerLivros() {
        return $this->livros;
    }

    public function criarLivro($livro) {
        $this->livros[] = $livro;
    }

    public function atualizarLivro($titulo, $novoTitulo, $autor, $genero, $anoPublicacao, $quantidade) {
        foreach ($this->livros as &$livro) {
            if ($livro->getTitulo() === $titulo) {
                $livro->setTitulo($novoTitulo);
                $livro->setAutor($autor);
                $livro->setGenero($genero);
                $livro->setAnoPublicacao($anoPublicacao);
                $livro->setQuantidade($quantidade);
                break;
            }
        }
    }

    public function excluirLivro($titulo) {
        foreach ($this->livros as $index => $livro) {
            if ($livro->getTitulo() === $titulo) {
                unset($this->livros[$index]);
                break;
            }
        }
        $this->livros = array_values($this->livros);
    }
}