<?php

class pessoa {
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha) {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setTelefone($telefone);
        $this->setidade($idade);
        $this->email = $email;
        $this->senha = $senha;
    }

    //Getter e setter para $nome
    public function setNome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }
    public function getNome() {
        return $this->nome;
    }
    public function setCpf($cpf) {
        $this->cpf = preg_replace('/\D/', '', $cpf);
    }
    //Getter cpf
    public function getCpf() {
        return $this->cpf;
    }
    //Getter e Setter para telefone
    public function setTelefone($telefone) {
        $this->telefone = preg_replace('/\D/' , '', $telefone);
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function setIdade($idade) {
        $this->idade = abs((int)$idade);
    }
    public function getIdade() {
        return $this->idade;
    }
}

$aluno1 = new pessoa("GaBrIeL FeRrEiRa Da SiLvA", "123.456;789.10", "(19)9999-1234", "-25", "teste@teste.com", "teste123");
echo $aluno1->getNome();