<?php

// modificadores de acesso
// eistem 3tipos public private e protect
// Public NomeDoAtributo: metodos e atributos publicos

//Private NomeDoAtributo: metodos e atributos privados para acesso somente dentro da classe. ultilizamos os getters e setters para acessalos.

//Protect NomeDoAtributo:metodos e atributos protegidos para acesso somente das classes e de suas classes filhas

//Pacotes (packages) : sintaxe logo no inicio do codigo, que atribui de onde os arquivos pertencem , ou seja, o caminho da pasta em que ele estácontido . Exemplo:

//namespace aula 9;

//caso tenham mais arquivos que formam o backend de uma pagina web e possuem a mesma raiz , o namespace terá o mesmo.

namespace Aula_9;

//Interfaces: é um recurso no qual garante que obrigatoriamente a classe tenho que construir algum metodo previamente determinado. Funciona como uma promessa ou contrato.
//Exemplo: configuramos uma interface "pagamento" que faz com que qualquer classe que a implante, tenha obrigatoriamente construir o metodo "pagar".

interface Pagamento {  // interface de contrato de pagamento
    public function pagar($valor);
}

class CartaoDeCredito implements Pagamento {
    public function pagar($valor) {
        echo "pagamento realizado com cartao de credito, valor: $valor\n";
    }
}

class PIX implements Pagamento {
    public function pagar($valor) {
        echo "pagamento realizado via pix, valor: $valor\n";                                      
    }
}

class DinheiroEspecie implements Pagamento {
    public function pagar($valor) {
        $desconto = $valor * 0.10;
        $valorComDesconto = $valor - $desconto;
        
        echo "Pagamento realizado em dinheiro em espécie\n";
        echo "Desconto de 10% aplicado: R$ " . number_format($desconto, 2, ',', '.') . "\n";
        echo "Valor final: R$ " . number_format($valorComDesconto, 2, ',', '.') . "\n";
    }
}

//testando interfaces: deve-se criar objetos associados a cada classe que será testada. Exemplo:

$cred = new CartaoDeCredito(); //criando objetos

echo "testando cartao de credito para pagamento: ";
$cred->pagar(250);

//neste exemplo criamos um objeto chamado "$cred" para a classe"CartaoDeCredito" e depois chamamos o metodo "pagar" para este objeto, passando R$
// 250 como parametro. 

//crie objetos para as classes "pix" e "DinheiroEspecie"

$pix = new PIX();
echo "testando pix para pagamento: ";
$pix->pagar(150);

$dinheiro = new DinheiroEspecie();
echo "testando dinheiro em espécie para pagamento: ";
$dinheiro->pagar(100);


//criando uma interface simples

//crie uma interface chamada forma que obrigue qualquer classe a ter um metodo CalcularArea().
//depois, crie as classes quadrado e circulo que implementem a interface.

// Area quadrado = 1 * 1
// Area circulo = π * r²

interface Forma {
    public function CalcularArea();
}

class Quadrado implements Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function CalcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo implements Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function CalcularArea() {
        return pi() * pow($this->raio, 2);
    }
}

class Pentagono implements Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function CalcularArea() {
        return (5 * pow($this->lado, 2)) / (4 * tan(pi() / 5));
    }
}

class Hexagono implements Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function CalcularArea() {
        return (3 * sqrt(3) * pow($this->lado, 2)) / 2;
    }
}

// Testando as classes
$quadrado = new Quadrado(1);
echo "Área do quadrado: " . $quadrado->CalcularArea() . "\n";

$circulo = new Circulo(2);
echo "Área do círculo: " . $circulo->CalcularArea() . "\n";

$pentagono = new Pentagono(3);
echo "Área do pentágono: " . $pentagono->CalcularArea() . "\n";

$hexagono = new Hexagono(3);
echo "Área do hexágono: " . $hexagono->CalcularArea() . "\n";