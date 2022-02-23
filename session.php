<?php
require './config/conexao.php';
session_start();

// Após iniciar a sessão em si, precisamos informar os dados a serem validados: nome de usuário e senha!
$user=$_POST['user'];
$password=$_POST['password'];

// Aqui faremos uma consulta direta no banco, selecionando o usuário que contém este nome e esta senha.
$query = "SELECT * FROM user WHERE user = '$user' AND password = '$password'";
$consulta = pg_query($conexao,$query);
// Precisamos saber a quantidade que constam no banco, no caso 0 ou 1, 
// pois se o resultado for 0 então o login ou a senha estão incorretos!
$quantidade = pg_num_rows($consulta);

// Abriremos o if para verificar os usuários encontrados no banco, como explanado anteriormente.
if($quantidade > 0){
    $_SESSION['user'] = $user;
    header("location: inicio.php");
} else {
    echo "Login incorreto!";
    // Aqui ele retorna uma mensagem, porém poderíamos redirecionar o usuário para outra página,
    // caso fosse desejado.
}

?>