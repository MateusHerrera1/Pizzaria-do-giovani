<?php
$id_cliente = @$_GET["id_cliente"];

$conexao = new mysqli("127.0.0.1","root","","pizzaria");

$sql= "SELECT * FROM cliente WHERE id_cliente = $id_cliente";

$resultado = $conexao->query($sql);

$dados = $resultado->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido_Cadastro</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="col-lg-4 offset-lg-4">
        <div class="row">
            <form class="container" method="post" action="pedido_cadastro_salvar.php?id_cliente=<?php echo $dados["id_cliente"];?>">
                <h2>Cadastro de Pedido</h2>
                <div class="col-md-6">
                    <label class="form-group">
                       ID Cliente
                    </label>
                    <input type="text" name="id_cliente" value="<?php echo $dados["id_cliente"];?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-group">
                        pizza
                    </label>
                    <input type="text" name="nome_pizza" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-group">
                        quantidade
                    </label>
                    <input type="number" name="quantidade" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-group">
                        Data do Pedido
                    </label>
                    <input type="date" name="data_pedido" class="form-control">
                </div>
                <form action="pedido2.php"><button type="submit" class="btn btn-primary">SALVAR</button></form>
            </form>
                <div class="col-md-6">
                    <a href="cliente.php" class="btn btn-danger">VOLTAR</a>
                </div>
               
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html> 

