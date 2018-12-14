<?php
	require_once('inc/conexao.php');
	
	if(isset($_SESSION['email'])){

        $id_usuario=$_SESSION['id_usuario'];
        $senha=$_POST['senha'];
		$nome=$_POST['nome'];
		$cep=$_POST['cep'];
		$cidade=$_POST['cidade'];
		$estado=$_POST['estado'];	

			$sql = "UPDATE usuario SET nome='$nome',senha='$senha',cep='$cep',cidade='$cidade',estado='$estado' WHERE id_usuario='$id_usuario'";
			$altera=mysqli_query($conexao,$sql);
			echo "<script type='text/javascript'>alert('Perfil alterado com sucesso');</script>";
            echo "<script> window.location='index.php';</script>";
		}
	else{
	        echo "<script type='text/javascript'>alert('Ocorreu algum erro! Corra para as colinas!');</script>";
            echo "<script> window.location='index.php';</script>";
	}
	?>