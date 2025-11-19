<?php
session_start();
require_once __DIR__ . '/../controller/BebidaController.php';
$controller = new BebidaController();
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
        $this->valor = floatval($valor);
        $this->qtde = intval($qtde);
    }

    public function getNome() { return $this->nome; }
    public function getCategoria() { return $this->categoria; }
    public function getVolume() { return $this->volume; }
    public function getValor() { return $this->valor; }
    public function getQtde() { return $this->qtde; }
}

if (!isset($_SESSION['bebidas'])) {
    $_SESSION['bebidas'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_GET['act'] ?? '';

    if ($acao === 'salvar') {
        $nome = trim($_POST['nome'] ?? '');
        $categoria = $_POST['categoria'] ?? '';
        $volume = trim($_POST['volume'] ?? '');
        $valor = $_POST['valor'] ?? 0;
        $qtde = $_POST['qtde'] ?? 0;

        if ($nome && $categoria && $volume && is_numeric($valor) && is_numeric($qtde)) {
            $controller->criar($nome, $categoria, $volume, $valor, $qtde);
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        }
    } elseif ($acao === 'deletar') {
        $nomeExcluir = $_POST['nome'] ?? '';
        $_SESSION['bebidas'] = array_filter($_SESSION['bebidas'], function ($bebida) use ($nomeExcluir) {
            return $bebida->getNome() !== $nomeExcluir;
        });
        $_SESSION['bebidas'] = array_values($_SESSION['bebidas']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
    elseif ($acao === 'editar') {
        $nomeParaEditar = $_POST['nomeOriginal'] ?? ''; 

        $novoNome = trim($_POST['novoNome'] ?? '');
        $novaCategoria = $_POST['novaCategoria'] ?? '';
        $novoVolume = trim($_POST['novoVolume'] ?? '');
        $novoValor = $_POST['novoValor'] ?? 0;
        $novaQtde = $_POST['novaQtde'] ?? 0;

       
        if ($novoNome && $novaCategoria && is_numeric($novoValor) && is_numeric($novaQtde)) {
            foreach ($_SESSION['bebidas'] as $index => $bebida) {
                if ($bebida->getNome() === $nomeParaEditar) {   
                    $_SESSION['bebidas'][$index] = new Bebida(
                        $novoNome,     
                        $novaCategoria,  
                        $novoVolume,  
                        $novoValor,  
                        $novaQtde    
                    );
                    break; 
                }
            }
        }
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

}


$lista = $controller->ler();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de bebidas</title>
    <!-- <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f4; }
        .container { max-width: 1000px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .section { margin-bottom: 20px; padding: 15px; border: 1px solid #ccc; border-radius: 5px; }
        h1, h2 { margin-bottom: 15px; }
        .form-group { display: flex; gap: 10px; margin-bottom: 10px; }
        input, select, button { padding: 10px; border-radius: 4px; border: 1px solid #ccc; }
        button { background-color: #007bff; color: white; border: none; cursor: pointer; }
        button.btn-delete { background-color: #dc3545; }
        button.btn-edit { background-color: #ffc107; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
    </style> -->
</head>
<body>

<div class="container">
    <header>
        <h1>Gerenciamento de Bebidas</h1>
    </header>

    <div class="section" id="section-adicionar">
        <h2>Adicionar Nova Bebida</h2>
        <form method="POST" action="?act=salvar">
            <input type="hidden" name="acao" value="salvar">
            <div class="form-group">
                <input type="text" name="nome" placeholder="Nome da Bebida" required>
                <select name="categoria" required>
                    <option value="">Selecione Categoria</option>
                    <option value="Alcoólica">Alcoólica</option>
                    <option value="Não Alcoólica">Não Alcoólica</option>
                </select>
                <input type="text" name="volume" placeholder="Volume (ex: 350ml)" required>
                <input type="number" step="0.01" name="valor" placeholder="Valor" required>
                <input type="number" name="qtde" placeholder="Quantidade" required>
            </div>
            <button type="submit">Salvar Nova Bebida</button>
        </form>
    </div>

    <div class="section" id="section-editar" style="display: none;">
        <h2>Editar Bebida</h2>
        <form method="POST" id="formEdicao">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="nomeOriginal" id="editNomeOriginal">

            <div class="form-group">
                <input type="text" name="novoNome" id="editNovoNome" placeholder="Novo Nome da Bebida" required>
                <select name="novaCategoria" id="editNovaCategoria" required>
                    <option value="">Selecione Categoria</option>
                    <option value="Alcoólica">Alcoólica</option>
                    <option value="Não Alcoólica">Não Alcoólica</option>
                </select>
                <input type="text" name="novoVolume" id="editNovoVolume" placeholder="Novo Volume (ex: 350ml)" required>
                <input type="number" step="0.01" name="novoValor" id="editNovoValor" placeholder="Novo Valor" required>
                <input type="number" name="novaQtde" id="editNovaQtde" placeholder="Nova Quantidade" required>
            </div>
            <button type="submit">Salvar Alterações</button>
            <button type="button" onclick="cancelarEdicao()">Cancelar</button>
        </form>
    </div>
    
    <div class="section">
        <h2>Lista de Bebidas Cadastradas</h2>
        <?php if (empty($lista)): ?>
            <p>Nenhuma bebida cadastrada ainda.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Volume</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $bebida): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($bebida->getNome()); ?></td>
                            <td><?php echo htmlspecialchars($bebida->getCategoria()); ?></td>
                            <td><?php echo htmlspecialchars($bebida->getVolume()); ?></td>
                            <td>R$ <?php echo htmlspecialchars(number_format($bebida->getValor(), 2, ',', '.')); ?></td>
                            <td><?php echo htmlspecialchars($bebida->getQtde()); ?></td>
                            <td>
                                <form method="POST" style="display:inline-block;">
                                    <input type="hidden" name="acao" value="deletar">
                                    <input type="hidden" name="nome" value="<?php echo htmlspecialchars($bebida->getNome()); ?>">
                                    <button type="submit" class="btn-delete">Deletar</button>
                                </form>

                            
                                <button 
                                    type="button" 
                                    class="btn-edit" 
                                    onclick="preencherFormEdicao('<?php echo htmlspecialchars($bebida->getNome()); ?>',
                                                                 '<?php echo htmlspecialchars($bebida->getCategoria()); ?>',
                                                                 '<?php echo htmlspecialchars($bebida->getVolume()); ?>',
                                                                 '<?php echo htmlspecialchars($bebida->getValor()); ?>',
                                                                 '<?php echo htmlspecialchars($bebida->getQtde()); ?>')">
                                    Editar
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

<script>
    function preencherFormEdicao(nome, categoria, volume, valor, qtde) {
        document.getElementById('editNomeOriginal').value = nome;
        document.getElementById('editNovoNome').value = nome;
        document.getElementById('editNovaCategoria').value = categoria;
        document.getElementById('editNovoVolume').value = volume;
        document.getElementById('editNovoValor').value = valor;
        document.getElementById('editNovaQtde').value = qtde;
        
  
        document.getElementById('section-adicionar').style.display = 'none';
        document.getElementById('section-editar').style.display = 'block';
        window.scrollTo(0, 0);
    }

    function cancelarEdicao() {
        document.getElementById('section-adicionar').style.display = 'block';
        document.getElementById('section-editar').style.display = 'none';
    }
</script>

</body>
</html>
