<?php
    require_once('inc/conexao.php');

    $busca = $_POST['busca'];

    $sql = "SELECT * FROM evento WHERE lower(nome) like '%$busca%'";
    $resultado = mysqli_query($conexao, $sql);
    $array_busca = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    if($resultado == NULL){
        echo "<script type='text/javascript'>alert('Nenhum resultado encontrado');</script>";
        echo "<script> window.location='crud_evento.php';</script>";
    }
    else{
        $_SESSION['busca'] = $array_busca;
        echo "<script> window.location='crud_evento.php';</script>";
    }

?>