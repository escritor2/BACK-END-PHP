<?php
namespace Aula_Exercicios;


interface Forma {
    public function calcularArea();
}

class Quadrado implements Forma {
    public $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Retangulo implements Forma {
    public $base;
    public $altura;
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

class Circulo implements Forma {
    public $raio;
    public function __construct($raio) {
        $this->raio = $raio;
    }
    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
}


echo "=== Exercício 1 – Formas Geométricas ===\n";
$q = new Quadrado(4);
$r = new Retangulo(5, 3);
$c = new Circulo(2);
echo "Área do Quadrado: " . $q->calcularArea() . "\n";
echo "Área do Retângulo: " . $r->calcularArea() . "\n";
echo "Área do Círculo: " . number_format($c->calcularArea(), 2) . "\n\n";


class Animal {
    public function fazerSom() {
        echo "Som genérico de animal\n";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Au au!\n";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "Miau!\n";
    }
}

class Vaca extends Animal {
    public function fazerSom() {
        echo "Muuu!\n";
    }
}


echo "=== Exercício 2 – Animais e Sons ===\n";
$cachorro = new Cachorro();
$gato = new Gato();
$vaca = new Vaca();
$cachorro->fazerSom();
$gato->fazerSom();
$vaca->fazerSom();
echo "\n";


abstract class Transporte {
    abstract public function mover();
}

class Carro extends Transporte {
    public function mover() {
        echo "O carro está andando na estrada.\n";
    }
}

class Barco extends Transporte {
    public function mover() {
        echo "O barco está navegando no mar.\n";
    }
}

class Aviao extends Transporte {
    public function mover() {
        echo "O avião está voando no céu.\n";
    }
}

class Elevador extends Transporte {
    public function mover() {
        echo "O elevador está correndo pelo prédio.\n";
    }
}

echo "=== Exercício 3 – Meios de Transporte ===\n";
$t1 = new Carro();
$t2 = new Barco();
$t3 = new Aviao();
$t4 = new Elevador();
$t1->mover();
$t2->mover();
$t3->mover();
$t4->mover();
echo "\n";


class Email {
    public function enviar() {
        echo "Enviando email...\n";
    }
}

class Sms {
    public function enviar() {
        echo "Enviando SMS...\n";
    }
}

function notificar($meio) {
    if (method_exists($meio, 'enviar')) {
        $meio->enviar();
    } else {
        echo "O objeto não pode enviar notificações.\n";
    }
}

// Exercício 4
echo "=== Exercício 4 – Notificações ===\n";
$email = new Email();
$sms = new Sms();
notificar($email);
notificar($sms);
echo "\n";


class Calculadora {
    public function somar(...$numeros) {
        return array_sum($numeros);
    }
}


echo "=== Exercício 5 – Calculadora ===\n";
$calc = new Calculadora();
echo "Soma de 2 números: " . $calc->somar(10, 5) . "\n";
echo "Soma de 3 números: " . $calc->somar(10, 5, 3) . "\n";
