<?php
session_start();

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

$lista = $_SESSION['bebidas'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';

    if ($acao === 'salvar') {
        $nome = trim($_POST['nome'] ?? '');
        $categoria = $_POST['categoria'] ?? '';
        $volume = trim($_POST['volume'] ?? '');
        $valor = $_POST['valor'] ?? 0;
        $qtde = $_POST['qtde'] ?? 0;

        if ($nome && $categoria && $volume && is_numeric($valor) && is_numeric($qtde)) {
            $novaBebida = new Bebida($nome, $categoria, $volume, $valor, $qtde);
            $_SESSION['bebidas'][] = $novaBebida;
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
}

$lista = $_SESSION['bebidas'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de bebidas</title>
    <!-- <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 300;
        }

        .header hr {
            border: none;
            height: 2px;
            background: rgba(255, 255, 255, 0.3);
            margin: 20px auto;
            width: 80%;
        }

        .content {
            padding: 30px;
        }

        .section {
            margin-bottom: 40px;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 4px solid #3498db;
        }

        .section h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 500;
            font-size: 1.5em;
        }

        .form-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 15px;
        }

        form {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        input, select, button {
            padding: 12px 15px;
            border: 2px solid #e1e8ed;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        input[type="text"],
        input[type="number"],
        select {
            background: #fff;
        }

        button {
            background: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(39, 174, 96, 0.4);
        }

        .btn-delete {
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
        }

        .btn-delete:hover {
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
        }

        .table-container {
            overflow-x: auto;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th {
            background: linear-gradient(135deg, #34495e 0%, #2c3e50 100%);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9em;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #ecf0f1;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        tr:last-child td {
            border-bottom: none;
        }

        table form {
            background: none;
            box-shadow: none;
            padding: 0;
            margin: 0;
        }

        table button {
            padding: 8px 15px;
            font-size: 0.85em;
        }

        .empty-message {
            text-align: center;
            padding: 40px;
            color: #7f8c8d;
            font-style: italic;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .container {
                margin: 10px;
                border-radius: 10px;
            }
            
            .content {
                padding: 15px;
            }
            
            .form-group {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2em;
            }
            
            th, td {
                padding: 10px 8px;
                font-size: 0.9em;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            .header {
                padding: 20px;
            }
            
            .header h1 {
                font-size: 1.7em;
            }
            
            .section {
                padding: 15px;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section, .table-container, .empty-message {
            animation: fadeIn 0.5s ease-out;
        }

        .valor {
            color: #27ae60;
            font-weight: 600;
        }

        .quantidade {
            font-weight: 600;
            color: #2980b9;
        }
    </style> -->
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gerenciamento de Bebidas</h1>
            <hr>
        </div>
        
        <div class="content">
            <div class="section">
                <h2>Cadastrar Nova Bebida</h2>
                <form method="POST">
                    <input type="hidden" name="acao" value="salvar">
                    <div class="form-group">
                        <input type="text" name="nome" placeholder="Nome da bebida:" required>
                        <select name="categoria" required>
                            <option value="">Selecione a categoria</option>
                            <option value="Refrigerante">Refrigerante</option>
                            <option value="Cerveja">Cerveja</option>
                            <option value="Vinho">Vinho</option>
                            <option value="Destilado">Destilado</option>
                            <option value="Água">Água</option>
                            <option value="Suco">Suco</option>
                            <option value="Energético">Energético</option>
                        </select>
                        <input type="text" name="volume" placeholder="Volume (ex: 300ml):" required>
                        <input type="number" name="valor" step="0.01" placeholder="Valor em Reais (R$):" required>
                        <input type="number" name="qtde" placeholder="Quantidade em estoque:" required>
                        <button type="submit">Cadastrar Bebida</button>
                    </div>
                </form>
            </div>

            <div class="section">
                <h2>Bebidas Cadastradas</h2>
                <?php if (!empty($lista)): ?>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Categoria</th>
                                    <th>Volume</th>
                                    <th>Valor (R$)</th>
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
                                    <td class="valor">R$ <?php echo number_format($bebida->getValor(), 2, ',', '.'); ?></td>
                                    <td class="quantidade"><?php echo htmlspecialchars($bebida->getQtde()); ?></td>
                                    <td>
                                        <form method="POST" style="display: inline;">
                                            <input type="hidden" name="acao" value="deletar">
                                            <input type="hidden" name="nome" value="<?php echo htmlspecialchars($bebida->getNome()); ?>">
                                            <button type="submit" class="btn-delete" onclick="return confirm('Tem certeza que deseja excluir esta bebida?')">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="empty-message">
                        <p>Nenhuma bebida cadastrada no momento.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>