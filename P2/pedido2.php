<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form>
        <h2>Pedidos:</h2>
        <a href="pedido_adicionar.php" class="btn btn-success">adicionar pedido</a>
        <a href="cliente.php" class="btn btn-primary">Voltar</a>
        <a href="pizza.php" class="btn btn-primary">Pizzas</a>
    </form>
    <table class="table table-hover">
        <thead>
            <th>Pedido</th>
            <th>Pizza</th>
            <th>Cliente</th>
            <th>Quantidade</th>
            <th>Preco</th>
            <th>Total</th>
        </thead>
        <tbody>
            <?php
            $conexao = new mysqli('127.0.0.1', 'root', '', 'pizzaria');
            $sql = "SELECT 
                p.id_pedido, 
                pi.nome_pizza,
                c.nome ,  
                ip.quantidade, 
                ip.preco_unit, 
                p.total
               
            FROM 
                Pedido p
            JOIN 
                Cliente c ON p.id_cliente = c.id_cliente
            JOIN 
                Itens_Pedido ip ON p.id_pedido = ip.id_pedido
            JOIN 
                Pizza pi ON ip.id_pizza = pi.id_pizza
            WHERE 
                p.id_pedido = 1";
            $resultado = $conexao->query($sql);
            while ($dados = $resultado->fetch_assoc()) {
                echo "<tr>
                    <td>" . $dados["id_pedido"] . "</td>
                    <td>" . $dados["nome_pizza"] . "</td>
                    <td>" . $dados["nome"] . "</td>
                    <td>" . $dados["quantidade"] . "</td>
                    <td>" . $dados["preco_unit"] . "</td>
                    <td>" . $dados["total"] . "</td>
                  </tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
