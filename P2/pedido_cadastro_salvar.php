<?php
$cliente     = @$_POST["id_cliente"];
$data= @$_POST["data_pedido"];

$conexao = new mysqli("127.0.0.1","root","","pizzaria");

$query = "
    INSERT INTO pedido
    (id_cliente,data_pedido)
    VALUES
    ('$cliente','$data')
";

$resultado = $conexao->query($query);

header('location:pedido.php');  
 
?>