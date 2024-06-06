<?php

    $id_cliente= @$_POST["id_cliente"];
    $nome      = @$_POST["nome"];
    $telefone  = @$_POST["telefone"];
    $endereco  = @$_POST["endereco"];

   

    $conexao = new mysqli("127.0.0.1","root","","pizzaria");

    $query = "UPDATE cliente
                SET nome='$nome',
                    telefone='$telefone',
                    endereco='$endereco'
                WHERE id_cliente=$id_cliente 
                 ";


    $conexao->query($query);

    header("location:cliente.php");

?>