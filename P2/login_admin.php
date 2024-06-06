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
                        <h1>BEM VINDO ADIMINISTRADOR</h1>
                        <label class="form-label">Usuário</label>
                        <input type="text" name="email" class="form-control" placeholder="Digite o e-mail" />
                        <br />
                        <label class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" placeholder="Digite a senha" />
                        <div>
                            <input type="submit" value="ENTRAR" class="btn btn-warning">
                        </div>
                        <br />

                        <button><a href="login.php">voltar</a></button>
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