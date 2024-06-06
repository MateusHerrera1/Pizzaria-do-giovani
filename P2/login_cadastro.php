<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:#f2f2f2">
<div class="container">
    <div>
       <div>
       <form action="login_cadastro_salvar.php" method="post" style="background:#aaa678">
            <div class="col-lg-4 offset-lg-4">
                <h2>Registro de Usuário</h2>
                <label class="form-label" >Usuário</label>
                <input type="text" name="email" class="form-control" placeholder="Digite o e-mail"/>
                <br/>
                <label class="form-label" >Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Digite a senha"/>
                <div>
                <input type="submit" value="SALVAR" class="btn btn-primary">
                </div>
                <br/>
                <a href="login.php" class="btn btn-secondary">
                    VOLTAR
                </a>
           </div>
        </form>
       </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>