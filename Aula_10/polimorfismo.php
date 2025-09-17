<?php
namespace Aula_10;

// polimorfismo
// O termo polimorfismo significa "várias formas". Associando isso à programação orientada a objetos, 
// o conceito se trata de várias classes e suas instâncias (objetos) respondendo a um mesmo método 
// de formas diferentes. No exemplo da interface da aula_09, temos um método calcularArea() que 
// responde de forma diferente à classe Quadrado, à classe Pentágono e à classe Círculo.
// Isso quer dizer que a função é a mesma - calcular a área de forma geométrica - mas a operação 
// muda de acordo com a figura.
//
// Agora criaremos um método chamado "mover()", onde ele responde de várias formas diferentes para 
// as subclasses: Carro, Aviao, Barco, Elevador. Usando interface:

interface veiculo {
    public function mover();
}

class carro implements veiculo {
    public $nome;
    public function mover() {
        echo "O carro {$this->nome} está andando.\n";
    }
}

class aviao implements veiculo {
    public $nome;
    public function mover() {
        echo "O avião {$this->nome} está voando.\n";
    }
}

// carros
$carro1 = new carro();
$carro1->nome = "Civic";

$carro2 = new carro();
$carro2->nome = "Corolla";

// aviões
$aviao1 = new aviao();
$aviao1->nome = "Boeing 737";

$aviao2 = new aviao();
$aviao2->nome = "Airbus A320";

// Chamando os métodos
$carro1->mover();
$carro2->mover();

$aviao1->mover();
$aviao2->mover();
