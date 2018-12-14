<?php
require_once('inc/conexao.php');

if(isset($_SESSION['email'])){

    $nome_arq   = $_FILES['banner']['name'];
    $nome_temp  = $_FILES['banner']['tmp_name'];
    $ext        = strchr($nome_arq, ".");
    move_uploaded_file($nome_temp, "./img/banners/"  . $_SESSION['id_usuario']. $nome_arq);
    $nome_arq = $_SESSION['id_usuario'] . $nome_arq;
    $id_usuario = $_SESSION['id_usuario'];
    $nome       = $_POST['nome'];
    $descricao  = $_POST['descricao'];
    $dt_evento  = $_POST['dt_evento'];
    $hora       = $_POST['hora'];
    $endereco   = $_POST['endereco'];
    $cidade     = $_POST['cidade'];
    $estado     = $_POST['estado'];
    $cep        = $_POST['cep'];

    $sql="INSERT INTO evento(id_usuario,descricao,nome,dt_evento,hora,endereco,cidade,estado,cep,img) 
    VALUES('$id_usuario','$descricao','$nome','$dt_evento','$hora','$endereco','$cidade','$estado','$cep','$nome_arq')";
    var_dump(mysqli_query($conexao,$sql));
    echo "<script type='text/javascript'>alert('Evento criado com sucesso');</script>";
    echo "<script> window.location='index.php';</script>";
}
?>