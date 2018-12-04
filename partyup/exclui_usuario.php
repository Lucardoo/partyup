<?php
require_once('inc/conexao.php');

if($_SESSION['admin'] == 1 ){

        $id_usuario = $_GET['id_usuario'];

        $sql1 = "DELETE FROM ingresso WHERE id_usuario='$id_usuario'";
        $resultado1 = mysqli_query($conexao, $sql1);
        
        $sql2 = "DELETE FROM evento WHERE id_usuario='$id_usuario'";
        $resultado1 = mysqli_query($conexao, $sql2);

        $sql3 = "DELETE FROM usuario WHERE id_usuario='$id_usuario'";
        $resultado1 = mysqli_query($conexao, $sql3);
        
        $_SESSION['msg'] = 'usuario_excluido';
        header('Location: crud_usuario.php');
}
else{

    header('Location: cruds.php');
}
?>