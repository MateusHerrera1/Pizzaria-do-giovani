<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form>
        <h2>Itens Pedidos</h2>
        <a href="pizza.php" class="btn btn-primary">Voltar</a>     
    </form>
    <table class="table table-hover">
        <thead>
            <th>Item</th>
            <th>Pedido</th>
            <th>Pizza</th>
            <th>Quantidade</th>
            <th>Preço Unitario</th>
        </thead>
        <tbody>
            <?php
                $conexao = new mysqli('127.0.0.1','root','','pizzaria');
                $sql = "SELECT * FROM itens_pedido";
                $resultado = $conexao->query($sql);
                while($dados= $resultado->fetch_assoc()){
                  echo"<tr>
                    <td>".$dados["id_item"]."</td>
                    <td>".$dados["id_pedido"]."</td>
                    <td>".$dados["id_pizza"]."</td>
                    <td>".$dados["quantidade"]."</td>
                    <td>".$dados["preco_unit"]."</td>     
                    </td>
                  </tr>";
                }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>