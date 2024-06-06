<?php
$usuario = @$_POST["email"];
$senha = @$_POST["senha"];

if($usuario == ""){
    echo "Digite o e-mail do usuario.";
    exit;
}

if($senha == ""){
    echo "Senha é obrigatorio.";
    exit;
}

$conexao = new mysqli("127.0.0.1","root","","pizzaria");

$query="
INSERT INTO login (usuario,senha)
VALUES ('$usuario','$senha')
";

$resultado= $conexao->query($query);

//echo "Usuário inserido com sucesso";
header('location:login.php');
?>