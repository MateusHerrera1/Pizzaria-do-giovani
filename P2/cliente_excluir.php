<?php

    $id_cliente = @$_GET["id_cliente"];


 
    $conexao = new mysqli("127.0.0.1","root","","pizzaria");

   $sql= "DELETE FROM cliente
            WHERE  id_cliente = $id_cliente
            ";

   $resultado = $conexao->query($sql);

   /* $dados = $resultado->fetch_assoc();*/

    header("location:cliente.php");

?> 