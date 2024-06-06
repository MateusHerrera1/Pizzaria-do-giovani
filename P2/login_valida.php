<?php
$usuario = @$_POST["email"];
$senha = @$_POST["senha"];

if ($usuario == "") {
    echo "Digite o e-mail do usuário.";
    exit;
}

if ($senha == "") {
    echo "Senha é obrigatória.";
    exit;
}

if ($usuario == "adm" && $senha == "12345") {
    header("location: cliente.php");
    exit;
}

$conexao = new mysqli("127.0.0.1", "root", "", "pizzaria");

$query = "
SELECT * FROM login
WHERE usuario = '$usuario'
AND senha='$senha'
";

$resultado = $conexao->query($query);

if ($resultado->num_rows > 0) {
    header("location: menuPizza.html");
    exit;
} else {
    echo "Email e/ou senha inválidos";
}

$conexao->close();
?>