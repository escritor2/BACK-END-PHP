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

    // Construtor para facilitar a criação de objetos
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
    //metodos
public function casamento() {
    echo "o usuario {$this->nome} vai casar";
}
public function testandoreservista() {
    if ($this->sexo=="Masculino") {
        echo "Apresente seu
certificado de reservista do tiro de guerra!";
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

// Exibir informações dos usuários
echo "=== INFORMAÇÕES DOS USUÁRIOS ===\n\n";
echo "USUÁRIO 1:\n";
$usuario1->exibirInformacoes();

echo "USUÁRIO 2:\n";
$usuario2->exibirInformacoes();

echo "USUÁRIO 3:\n";
$usuario3->exibirInformacoes();




// Exercicio 1: Crie uma classe (molde de objetos) chamada 'Cachorro' com os seguintes atributos: Nome, idade, raça, castrado e sexo.
class Cachorro {
    public $nome;
    public $idade;
    public $raca;
    public $castrado;
    public $sexo;

    public function __construct($nome, $idade, $raca, $castrado, $sexo){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->raca=$raca;
        $this->castrado=$castrado;
        $this->sexo=$sexo;
    }
        // Exercício 5:
    public function latir() {
        echo "O cachorro {$this->nome} está latindo!\n";
    }
    
    // Exercício 6:
    public function marcarTerritorio() {
        echo "O cachorro {$this->nome} da raça {$this->raca} está marcando território\n";
    }

}

// Exercicio 2: Após a criação da classe, crie 10 cachorros (10 objetos)
$cachorro1 = new Cachorro("Rex", 5, "Show-show", true, "Macho");
$cachorro2 = new Cachorro("Bob", 7, "Caramelo", false, "Macho");
$cachorro3 = new Cachorro("Valentina", 1, "Poodle", true, "Femea");
$cachorro4 = new Cachorro("Rafael", 12, "Yorkshire", false, "Macho");
$cachorro5 = new Cachorro("Gloria", 9, "Boxer", false, "Femea");
$cachorro6 = new Cachorro("Amora", 12, "Shitzu", false, "Femea");
$cachorro7 = new Cachorro("Luke", 1, "Fox", true, "Macho");
$cachorro8 = new Cachorro("Kiara", 5, "Shitzu", false, "Femea");
$cachorro9 = new Cachorro("Jake", 5, "Lhasa", true, "Macho");
$cachorro10 = new Cachorro("Ana lucia", 11, "Pinscher", false, "Femea");


$usuario1-> casar(); //chamando metodo para casar usuario
$cachorro1->latir(); //chamando metodo para latir
$cachorro10->marcarTerritorio(); //chamando metodo para marcar territorio
?>
