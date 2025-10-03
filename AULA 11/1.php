// classes: turista, destino
// 

//metodos:Turista.viajar(destino), Destino.oferecerComidaTipica(),Destino.oferecerAtividadeAguas()

class Turista {
    public function viajar(Destino $destino) {
        echo "O turista está viajando para " . $destino->getNome() . ".\n";
        $destino->oferecerComidaTipica();
        $destino->oferecerAtividadeAguas();
    }
}

public class Destino {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function oferecerComidaTipica() {
        echo "Oferecendo comida típica de " . $this->nome . ".\n";
    }

    public function oferecerAtividadeAguas() {
        echo "Oferecendo atividades aquáticas em " . $this->nome . ".\n";
    }
}