<?php 
require_once('inc/cabecalho.php');

if($_SESSION['admin']==1){
    $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
    
    $resultado_array = mysqli_fetch_all(mysqli_query($conexao, $sql),MYSQLI_ASSOC);
?>

    <section class="container"> 
        <main class="row"> 
            <div class="col-12">
                <div class="cruds text-center">   
                    <button type="button" class="btn btn-outline-success my-2 my-sm-0" onclick="window.location.href='crud_usuario.php'">Usuarios</button>
                    <button type="button" class="btn btn-outline-success my-2 my-sm-0" onclick="window.location.href='crud_evento.php'">Eventos</button>
                </div>
    
            <table class="table">
        <thead class="thead">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do criador</th>
            <th scope="col">Nome do evento</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data</th>
            <th scope="col">CEP</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            </tr>
                </thead>
                <tbody>
                    <?php

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