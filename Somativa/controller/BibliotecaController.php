<?php
require_once __DIR__ . '/../model/BibliotecaDAO.php';
require_once __DIR__ . '/../model/Biblioteca.php';

Class BibliotecaController {
    private $dao;

    public function __construct() {
        $this->dao = new BibliotecaDAO();
    }
    public function ler() {
        return $this->dao->lerLivros();
    }
    public function criar($titulo, $autor, $genero, $anoPublicacao, $quantidade) {
        $livro = new Livro($titulo, $autor, $genero, $anoPublicacao, $quantidade);
        $this->dao->criarLivro($livro);
    }
    public function atualizar($titulo, $novoTitulo, $autor, $genero, $anoPublicacao, $quantidade) {
        $this->dao->atualizarLivro($titulo, $novoTitulo, $autor, $genero, $anoPublicacao, $quantidade);
    }
    public function deletar($titulo) {
        $this->dao->excluirLivro($titulo);
    }
}
?>