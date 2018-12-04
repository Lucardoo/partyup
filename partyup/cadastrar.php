<?php
require_once('inc/conexao.php');

$email=$_POST['email'];
$senha=$_POST['senha'];
$nome=$_POST['nome'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$cep=$_POST['cep'];

$sql1 = "SELECT email FROM usuario WHERE email = '$email'";
$resultado1 = mysqli_query($conexao, $sql1);

if($resultado1 != NULL){
    $sql="INSERT INTO usuario(email,senha,nome,cidade,estado,cep) VALUES('$email','$senha','$nome','$cidade','$estado','$cep')";
    $resultado = mysqli_query($conexao, $sql);
    header('Location: index.php');
}
?>