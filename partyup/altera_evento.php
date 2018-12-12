<?php
    require_once('inc/conexao.php');
    
    if($_SESSION['admin'] == 1){

        $id_evento  = $_GET['id_evento'];

        $sql = "SELECT id_usuario FROM usuario,evento WHERE usuario.id_usuario = evento.id_usuario AND id_evento = '$id_evento'";
        $id_usuario = mysqli_query($conexao,$sql);

        $nome_arq   = $_FILES['banner']['name'];
        $nome_temp  = $_FILES['banner']['tmp_name'];
        $ext        = strchr($nome_arq, ".");
        move_uploaded_file($nome_temp, "./img/banners/"  . $_SESSION['id_usuario']. $nome_arq);
        $nome_arq   = $id_usuario . $nome_arq;
        $nome       = $_POST['nome'];
        $descricao  = $_POST['descricao'];
        $dt_evento  = $_POST['dt_evento'];
        $hora       = $_POST['hora'];
        $endereco   = $_POST['endereco'];
        $cidade     = $_POST['cidade'];
        $estado     = $_POST['estado'];
        $cep        = $_POST['cep'];

        $sql1 = "UPDATE evento SET nome='$nome', descricao='$descricao', dt_evento='$dt_evento', hora='$hora',
        endereco='$endereco', cidade='$cidade', estado='$estado', cep='$cep', img='$nome_arq'
        WHERE id_evento = '$id_evento' ";
        $altera_evento = mysqli_query($conexao,$sql1);
        header('Location: crud_evento.php');
    }
    else{
        echo 'Deu merda!';
    }