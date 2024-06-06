<?php

    $id_cliente = @$_GET["id_cliente"];
 
    $conexao = new mysqli("127.0.0.1","root","","pizzaria");

    $sql= "SELECT * FROM cliente
            WHERE  id_cliente = $id_cliente";

    $resultado = $conexao->query($sql);

    $dados = $resultado->fetch_assoc();

   // echo $dados["endereco"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="col-lg-4 offset-lg-4">
        <div class="row">
            <form class="container"  method="post" action="cliente_alterar_salvar.php">
                 
                <input type="hidden" name="id_cliente" value="<?php echo $dados["id_cliente"];?>">
                <h2>Editar Clientes</h2>
                <div class="col-md-10">
                    <label class="form-group">
                        Nome
                    </label>
                    <input type="text" name="nome" value="<?php echo $dados["nome"];?> " class="form-control">
                </div>
                <div class="col-md-10">
                    <label class="form-group">
                        Telefone
                    </label>
                    <input type="text" name="telefone" value="<?php echo $dados["telefone"];?> " class="form-control">
                </div>
                <div class="col-md-10">
                    <label class="form-group">
                        Endereco
                    </label>
                    <input type="text" name="endereco" value="<?php echo $dados["endereco"];?> " class="form-control">
                </div>
                <div class="col-md-10">
                        <input type="submit" value="EDITAR" class="btn btn-primary">
                        <a href="cliente.php" class="btn btn-danger">VOLTAR</a>
                </div>
            
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>