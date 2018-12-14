<?php
	require_once('inc/conexao.php');
	
	if($_SESSION['admin'] == 1){
		$id_usuario=$_POST['id_usuario'];
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$cep=$_POST['cep'];
		$cidade=$_POST['cidade'];
		$estado=$_POST['estado'];	
		
		$sql3 = "SELECT email FROM usuario WHERE email = '$email' AND id_usuario!='$id_usuario'";
		$resultado3 = mysqli_query($conexao, $sql3);

		if (mysqli_num_rows($resultado3) != NULL){

			$_SESSION['msg'] = 'usuario_existente';
			header('Location: edita_usuario.php?id_usuario='.$id_usuario);

		}
		else{

			$sql = "UPDATE usuario SET nome='$nome',email='$email',cep='$cep',cidade='$cidade',estado='$estado' WHERE id_usuario='$id_usuario'";
			$altera=mysqli_query($conexao,$sql);
			echo "<script type='text/javascript'>alert('Usuario alterado com sucesso');</script>";
            echo "<script> window.location='crud_usuario.php';</script>";
		}
	}
	else{
	    header('Location: index.php');
	}
	?>