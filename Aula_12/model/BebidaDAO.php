<?php
require_once 'Bebida.php';

if (!class_exists('Bebida')) {
    class Bebida {
        private $nome;
        private $categoria;
        private $volume;
        private $valor;
        private $qtde;

        public function __construct($nome, $categoria, $volume, $valor, $qtde) {
            $this->nome = $nome;
            $this->categoria = $categoria;
            $this->volume = $volume;
            $this->valor = $valor;
            $this->qtde = $qtde;
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

        public function getQtde() {
            return $this->qtde;
        }

        public function setValor($valor) {
            $this->valor = $valor;
        }

        public function setQtde($qtde) {
            $this->qtde = $qtde;
        }
    }
}

class BebidaDAO {
    private $bebidasArray = [];
    private $arquivoJson = 'bebidas.json';

    public function __construct(){
        // Garante que o arquivo existe
        if(!file_exists($this->arquivoJson)){
            file_put_contents($this->arquivoJson, '{}');
        }
        
        $conteudoArquivo = file_get_contents($this->arquivoJson);
        $dadosArquivoEmArray = json_decode($conteudoArquivo, true);

        if ($dadosArquivoEmArray){
            foreach ($dadosArquivoEmArray as $nome => $info){
                $this->bebidasArray[$nome] = new Bebida(
                    $info['nome'],
                    $info['categoria'],
                    $info['volume'],
                    $info['valor'],
                    $info['qtde']
                );
            }
        }
    }

    private function salvarArquivo(){
        $dadosParaSalvar = [];

        foreach ($this->bebidasArray as $nome => $bebida){
            $dadosParaSalvar[$nome] = [
                'nome' => $bebida->getNome(),
                'categoria' => $bebida->getCategoria(),
                'volume' => $bebida->getVolume(),
                'valor' => $bebida->getValor(),
                'qtde' => $bebida->getQtde()
            ];
        }
        file_put_contents($this->arquivoJson, json_encode($dadosParaSalvar, JSON_PRETTY_PRINT));
    }

    // CREATE
    public function criarBebida(Bebida $bebida){
        $this->bebidasArray[$bebida->getNome()] = $bebida;
        $this->salvarArquivo();
    }

    //READ
    public function lerBebidas(){
        return $this->bebidasArray;
    }
    
    // UPDATE 
    public function atualizarBebida($nome, $novoValor, $novaQtde){
        if(isset($this->bebidasArray[$nome])){
            $this->bebidasArray[$nome]->setValor($novoValor);
            $this->bebidasArray[$nome]->setQtde($novaQtde);
            $this->salvarArquivo();
            return true;
        }
        return false;
    }

    // DELETE
    public function excluirBebida($nome){
        if(isset($this->bebidasArray[$nome])){
            unset($this->bebidasArray[$nome]);
            $this->salvarArquivo();
            return true;
        }
        return false;
    }
}
?>