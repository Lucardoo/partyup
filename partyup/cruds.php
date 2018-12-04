<?php 
require_once('inc/cabecalho.php');

if($_SESSION['admin']==1){
?>

    <div class="cruds text-center">   
	<button type="button" class="btn btn-outline-success my-2 my-sm-0" onclick="window.location.href='crud_usuario.php'">Usuarios</button>
	<button type="button" class="btn btn-outline-success my-2 my-sm-0" onclick="window.location.href='crud_evento.php'">Eventos</button>
	</div>
		

<?php
}else{
    header('Location: ../index.php');
}
require_once('inc/rodape.php');
?>