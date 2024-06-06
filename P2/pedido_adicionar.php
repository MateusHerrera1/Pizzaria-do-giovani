<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pedido</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="d-flex justify-content-center align-items-center min-vh-100">           
    <div class="row">
        <form class="container text-center" method="post" action="pedido_adicionar.php">
            <h2 class="mb-4">Adicionar Pedido</h2>
            <div class="mb-3">
                <label for="nome_cliente" class="form-label">Nome do Cliente</label>
                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" required>
            </div>
            <div class="mb-3">
                <label for="nome_pizza" class="form-label">Nome da Pizza</label>
                <input type="text" class="form-control" id="nome_pizza" name="nome_pizza" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" required>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Pedido</button>
            <a href="pizza.php" class="btn btn-danger">VOLTAR</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNdhmnR6EX6i8a5a3soDFWn4ZZgtIKm0jxwaBCdEHn8yL1Z9zmTOob8sYBfI9dV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWi0eKkLUCZDSfP5NfJ6pf6j+W9TXlFLPQE82h8bW3GmH5p4YLia+Qv9K/" crossorigin="anonymous"></script>
</body>
</html>

<?php
$conexao = new mysqli('127.0.0.1', 'root', '', 'pizzaria');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_cliente = $_POST["nome_cliente"];
    $nome_pizza = $_POST["nome_pizza"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];

    // Inserindo na tabela Pedido
    $sql = "INSERT INTO Pedido (id_cliente, total) VALUES ((SELECT id_cliente FROM Cliente WHERE nome = ?), ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sd", $nome_cliente, $preco);
    $stmt->execute();
    $id_pedido = $stmt->insert_id;

    // Obtendo id_pizza da tabela Pizza
    $sql = "SELECT id_pizza FROM Pizza WHERE nome_pizza = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $nome_pizza);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $id_pizza = $row["id_pizza"];

    // Inserindo na tabela Itens_Pedido
    $sql = "INSERT INTO Itens_Pedido (id_pedido, id_pizza, quantidade, preco_unit) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("iiid", $id_pedido, $id_pizza, $quantidade, $preco);
    $stmt->execute();

    // Fechando a declaração e a conexão
    $stmt->close();
    $conexao->close();

    // Redirecionando para pedido.php
    header("Location: pedido.php");
    exit();
}
?>
