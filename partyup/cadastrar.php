<?php
require_once('inc/conexao.php');

$email  = strip_tags($_POST['email']);
$senha  = strip_tags($_POST['senha']);
$nome   = strip_tags($_POST['nome']);
$cidade = strip_tags($_POST['cidade']);
$estado = strip_tags($_POST['estado']);
$cep    = strip_tags($_POST['cep']);

$sql1 = "SELECT email FROM usuario WHERE email = '$email'";
$resultado1 = mysqli_query($conexao, $sql1);


    $sql="INSERT INTO usuario(email,senha,nome,cidade,estado,cep) VALUES('$email','$senha','$nome','$cidade','$estado','$cep')";
    $resultado = mysqli_query($conexao, $sql);
    header('Location: index.php');
?>