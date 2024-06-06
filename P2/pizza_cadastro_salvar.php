<?php
    $nome = $_POST["nome_pizza"];
    $preco = $_POST["preco"];
    $ingredientes = $_POST["ingredientes"];

    $conexao = new mysqli("127.0.0.1", "root", "", "pizzaria");

    $query = "
        INSERT INTO pizza
        (nome_pizza, preco, ingredientes)
        VALUES
        ('$nome', '$preco', '$ingredientes')
    ";

    $resultado = $conexao->query($query);

    // Redireciona para a página pizza.php após inserir a pizza
    header('location:pizza.php');  
?>
