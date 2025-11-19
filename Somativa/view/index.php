<?php

require_once __DIR__ . '/../controller/BibliotecaController.php';
$controller = new BibliotecaController();
$lista = $controller->ler();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Biblioteca</h1>

    <h2>Lista de Livros</h2>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Gênero</th>
            <th>Ano de Publicação</th>
            <th>Quantidade</th>
        </tr>
        <?php foreach ($lista as $livro): ?>
        <tr>
            <td><?php echo htmlspecialchars($livro->getTitulo()); ?></td>
            <td><?php echo htmlspecialchars($livro->getAutor()); ?></td>
            <td><?php echo htmlspecialchars($livro->getGenero()); ?></td>
            <td><?php echo htmlspecialchars($livro->getAnoPublicacao()); ?></td>
            <td><?php echo htmlspecialchars($livro->getQuantidade()); ?></td>
            <td><?php echo htmlspecialchars($livro->getCadastro()); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>