<?php
require_once('inc/conexao.php');

$email=$_POST['email'];
$senha=$_POST['senha'];
$sql="SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";

$resultado=mysqli_query($conexao,$sql);

if(mysqli_num_rows($resultado)>0){

    $usuario = mysqli_fetch_assoc($resultado);
	$_SESSION['email'] = $usuario['email'];
	$_SESSION['senha'] = $usuario['senha'];
	$_SESSION['id_usuario'] = $usuario['id_usuario'];
    $_SESSION['admin'] = $usuario['admin'];
    
    header('Location: index.php');
}
else{
    echo 'DEU MERDA';
}
?>