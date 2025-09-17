<?php
// Exercício 3: Classe Usuario
class Usuario {
    public $nome;
    public $cpf;
    public $sexo;
    public $email;
    public $estadoCivil;
    public $cidade;
    public $estado;
    public $endereco;
    public $cep;


    public function __construct($nome, $cpf, $sexo, $email, $estadoCivil, $cidade, $estado, $endereco, $cep) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->estadoCivil = $estadoCivil;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    // Método para exibir informações do usuário
    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "\n";
        echo "CPF: " . $this->cpf . "\n";
        echo "Sexo: " . $this->sexo . "\n";
        echo "Email: " . $this->email . "\n";
        echo "Estado Civil: " . $this->estadoCivil . "\n";
        echo "Cidade: " . $this->cidade . "\n";
        echo "Estado: " . $this->estado . "\n";
        echo "Endereço: " . $this->endereco . "\n";
        echo "CEP: " . $this->cep . "\n";
        echo "------------------------\n";
    }
}

// Exercício 4: Criar 3 objetos com as informações fornecidas

// Usuário 1
$usuario1 = new Usuario(
    "Josenildo Afonso Souza",
    "100.200.300-40",
    "Masculino",
    "josenewdo.souza@gmail.com",
    "Casado",
    "Xique-Xique",
    "Bahia",
    "Rua da amizade, 99",
    "40123-98"
);

// Usuário 2
$usuario2 = new Usuario(
    "Valentina Passos Scherrer",
    "070.070.060-70",
    "Feminino",
    "scherrer.valen@outlook.com",
    "Divorciada",
    "Iracemápolis",
    "São Paulo",
    "Avenida da saudade, 1942",
    "23456-24"
);

// Usuário 3
$usuario3 = new Usuario(
    "Claudio Braz Nepumoceno",
    "575.575.242-32",
    "Masculino",
    "Clauclau.nepumoceno@gmail.com",
    "Solteiro",
    "Piripiri",
    "Piauí",
    "Estrada 3, 33",
    "12345-99"
);
?>
