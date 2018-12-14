<?php 
require_once('inc/cabecalho.php');

if($_SESSION['admin']==1){
?>
<div class="container">
	<div class="row" >
		<div class="cruds col-12 mt-2 "> 
			  
				<button type="button" class=" ml-1 btn btn-outline-success btn-block my-2 my-sm-0" onclick="window.location.href='crud_usuario.php'">Usuarios</button>
				<button type="button" class=" ml-1 btn btn-outline-success btn-block my-2 my-sm-0" onclick="window.location.href='crud_evento.php'">Eventos</button>
			
		</div>
	</div>
</div>


<?php
}else{
    header('Location: ../index.php');
}
require_once('inc/rodape.php');
?>