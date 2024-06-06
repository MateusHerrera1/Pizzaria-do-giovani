<?php
    $id_pedido  = @$_POST["id_pedido"];
    $id_pizza   = @$_POST["id_pizza"];
    $quantidade = @$_POST["quantidade"];
    $preco_unit = @$_POST["preco_unit"];

    if($id_pedido ==""){
        echo "Digite o ID do pedido";
        exit;
    }

    if($id_pizza ==""){
        echo "Digite o ID da pizza";
        exit;
    }

    if($quantidade == ""){
        echo "Digite a quantidade";
        exit;
    }

    if($preco_unit ==""){
        echo "Digite o Preço unitário";
        exit;
    }
    $conexao = new mysqli("127.0.0.1","root","","pizzaria");

    $query = "
        INSERT INTO itens_pedido
        (id_pedido,id_pizza,quantidade,preco_unit)
        VALUES
        ('$id_pedido','$id_pizza','$quantidade','$preco_unit')
    ";

    $resultado = $conexao->query($query);

   // echo "itens_pedido adicionado";
   header('location:itens_pedido_busca.php');  
?>