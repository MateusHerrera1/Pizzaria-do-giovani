<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="col-lg-4 offset-lg-4">           
        <div class="row">
            <form class="container" method="post" action="cliente_cadastro_salvar.php">
                <h2>Cadastro de Clientes</h2>
                <div class="col-md-6">
                    <label class="form-group">
                        Nome
                    </label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-group">
                        Telefone
                    </label>
                    <input type="tel" name="telefone" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-group">
                        Endereco
                    </label>
                    <input type="text" name="endereco" class="form-control">
                </div>

                <div class="col-md-6">
                        <input type="submit" value="SALVAR" class="btn btn-primary" >
                        <a href="login_admin.php" class="btn btn-primary">ADM</a>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>