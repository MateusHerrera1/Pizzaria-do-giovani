<?php
if (isset($_GET['id_pizza'])) {
    $id_pizza = $_GET['id_pizza'];

    $conexao = new mysqli('127.0.0.1', 'root', '', 'pizzaria');

    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }

    // Excluir itens de pedido associados
    $query_itens = "DELETE FROM itens_pedido WHERE id_pizza = ?";
    $stmt_itens = $conexao->prepare($query_itens);
    $stmt_itens->bind_param("i", $id_pizza);
    $stmt_itens->execute();
    $stmt_itens->close();

    // Excluir a pizza
    $query_pizza = "DELETE FROM pizza WHERE id_pizza = ?";
    $stmt_pizza = $conexao->prepare($query_pizza);
    $stmt_pizza->bind_param("i", $id_pizza);

    if ($stmt_pizza->execute()) {
        header('Location: pizza.php');
    } else {
        echo "Erro ao deletar a pizza: " . $conexao->error;
    }

    $stmt_pizza->close();
    $conexao->close();
} else {
    echo "ID da pizza não fornecido.";
}
?>
