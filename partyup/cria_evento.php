<?php
require_once('inc/conexao.php');
if(isset($_SESSION['email'])){

    $id_usuario=$_SESSION['id_usuario'];
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $dt_evento=$_POST['dt_evento'];
    $hora=$_POST['hora'];
    $endereco=$_POST['endereco'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $cep=$_POST['cep'];

    $sql="INSERT INTO evento(id_usuario,descricao,nome,dt_evento,img,hora,endereco,cidade,estado,cep) 
    VALUES('$id_usuario','$descricao','$nome','$dt_evento','default.jpg','$hora','$endereco','$cidade','$estado','$cep')";
    $resultado= mysqli_query($conexao,$sql);

}
?>