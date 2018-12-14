<?php 
require_once('inc/cabecalho.php');

if($_SESSION['admin']==1){
    $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
    
    $usuarios = mysqli_fetch_all(mysqli_query($conexao, $sql),MYSQLI_ASSOC);
?>
<section class="container-fluid bg-secondary"> 
    <main class="row"> 
        <div class="col-12"> 
            <div class="cruds text-center">   
                <button type="button" class="btn btn-block btn-outline-success my-2 my-sm-0" onclick="window.location.href='crud_usuario.php'">Usuarios</button>
                <button type="button" class="btn btn-block btn-outline-success my-2 my-sm-0" onclick="window.location.href='crud_evento.php'">Eventos</button>
	        </div>
            
                    <table class="table">
                <thead class="thead">
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       foreach($usuarios as $listagem_usuarios){
                        $html = '<tr>
                        <td>'.$listagem_usuarios['nome'].'</td>
                        <td>'.$listagem_usuarios['email'].'</td>
                        <td>'.$listagem_usuarios['cep'].'</td>
                        <td>'.$listagem_usuarios['cidade'].'</td>
                        <td>'.$listagem_usuarios['estado'].'</td>
                        <td>
                            <a class="btn btn-info" href="edita_usuario.php?id_usuario='.$listagem_usuarios['id_usuario'].'">
                                Editar</a>
                        </td>
                        </tr>';
                        echo $html;
                       } 
                    ?>
                </tbody>
                </table>
        </div>
    </main>
</section>

<?php
}else{
    header('Location: ../index.php');
}
require_once('inc/rodape.php');
?>