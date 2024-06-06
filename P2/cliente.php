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
        <h2>CLIENTES:</h2>
        <a href="cliente_cadastro.php" class="btn btn-primary">Cadastrar</a>  
        <a href="pedido2.php" class="btn btn-primary">pedidos</a>
            
    </form>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Adicionar Pedido</th>
            <th>Editar/Excluir</th>
        </thead>
        <tbody>
            <?php
                $conexao = new mysqli('127.0.0.1','root','','pizzaria');
                $sql = "SELECT * FROM cliente";
                $resultado = $conexao->query($sql);
                while($dados= $resultado->fetch_assoc()){
                  echo"<tr>
                    <td>".$dados["id_cliente"]."</td>
                    <td>".$dados["nome"]."</td>
                    <td>".$dados["telefone"]."</td>
                    <td>".$dados["endereco"]."</td>
        
                    <td>
                    <a href='pedido_cadastro.php?id_cliente=".$dados["id_cliente"]."' class='btn btn-primary'>Adicionar Pedido</a>
                    </td>
                    <td>
                    <a href='cliente_alterar.php?id_cliente=".$dados["id_cliente"]."' class='btn btn-info'>Editar</a> 
                    <a href='cliente_excluir.php?id_cliente=".$dados["id_cliente"]."' class='btn btn-danger'>Excluir</a>     
                    </td>
                  </tr>";
                }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
