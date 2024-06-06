<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background:#f2f2f2">

    <div class="container">
        <div class="card">
            <div class="row">
                <form action="login_valida.php" method="post" style="background:#aaa678">
                    <div class="col-lg-4 offset-lg-4">
                        <h1>ENTRAR NO SITE</h1>
                        <label class="form-label">Usuário</label>
                        <input type="text" name="email" class="form-control" placeholder="Digite o e-mail" />
                        <label class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" placeholder="Digite a senha" />
                        <label class="form-label">numero de telefone</label>
                        <input type="password" name="telefone" class="form-control" placeholder="Digite o telefone" />
                        <label class="form-label">endereço</label>
                        <input type="password" name="endereo" class="form-control" placeholder="digite o endereço" />
                        <div>
                            <input type="submit" value="ENTRAR" class="btn btn-warning">
                        </div>
                        <br />
                        <a href="login_cadastro.php">
                            Registrar novo usuário
                        </a>
                        <p>
                            <a href="login_admin.php">
                                Aréa Admin.
                            </a>
                        </p>


                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>