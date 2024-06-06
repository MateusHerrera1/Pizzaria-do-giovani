<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Pizza</title>
    <link rel="stylesheet" href="../styles/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="d-flex justify-content-center align-items-center min-vh-100">           
    <div class="row">
        <form class="container text-center" method="post" action="pizza_cadastro_salvar.php">
            <h2 class="mb-4">Cadastro de Pizzas</h2>
            <div class="mb-3">
                <label for="nome_pizza" class="form-label">Nome da Pizza</label>
                <input type="text" class="form-control" id="nome_pizza" name="nome_pizza" required>
            </div>
            <div class="mb-3">
                <label for="ingredientes" class="form-label">Ingredientes</label>
                <textarea class="form-control" id="ingredientes" name="ingredientes" rows="1" required></textarea>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="pizza.php" class="btn btn-danger">VOLTAR</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNdhmnR6EX6i8a5a3soDFWn4ZZgtIKm0jxwaBCdEHn8yL1Z9zmTOob8sYBfI9dV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWi0eKkLUCZDSfP5NfJ6pf6j+W9TXlFLPQE82h8bW3GmH5p4YLia+Qv9K/" crossorigin="anonymous"></script>
</body>
</html>
