<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzas</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form>
        <h2>PIZZAS:</h2>
        <a href="pizza_cadastrar.php" class="btn btn-success">adicionar pizza</a>
        <a href="pedido2.php" class="btn btn-primary">pedidos</a> 
        <a href="cliente.php" class="btn btn-primary">clientes</a>    
    </form>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nome da pizza</th>
            <th>Preço da pizza</th>
            <th>Ingredientes</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php
                $conexao = new mysqli('127.0.0.1','root','','pizzaria');
                $sql = "SELECT * FROM pizza";
                $resultado = $conexao->query($sql);
                while($dados = $resultado->fetch_assoc()){
                  echo "<tr>
                    <td>".$dados['id_pizza']."</td>
                    <td>".$dados['nome_pizza']."</td>
                    <td>".$dados['preco']."</td>
                    <td>".$dados['ingredientes']."</td>
                    <td>
                        <a href='pizza_deletar.php?id_pizza=".$dados['id_pizza']."' class='btn btn-danger btn-sm'>Deletar</a>
                    </td>
                  </tr>";
                }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
