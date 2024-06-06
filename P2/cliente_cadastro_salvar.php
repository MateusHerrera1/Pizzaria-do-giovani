<?php
    $nome     = @$_POST["nome"];
    $telefone = @$_POST["telefone"];
    $endereco = @$_POST["endereco"];

    if($nome ==""){
        echo "Digite nome do cliente";
        exit;
    }

    $conexao = new mysqli("127.0.0.1","root","","pizzaria");

    $query = "
        INSERT INTO cliente
        (nome,telefone,endereco)
        VALUES
        ('$nome','$telefone','$endereco')
    ";

    $resultado = $conexao->query($query);

   // echo "Cliente adicionado";
   header('location:menuPizza.html');  
?>