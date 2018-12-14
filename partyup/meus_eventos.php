<?php 
require_once('inc/cabecalho.php');
if(isset($_SESSION['email'])){
    $id_usuario = $_SESSION['id_usuario'];
    $sql =" SELECT evento.id_evento,evento.nome,evento.descricao,evento.dt_evento,evento.hora,evento.cep,evento.cidade,evento.estado,evento.img,usuario.nome as 'nome_usuario'
            FROM evento
            INNER JOIN usuario ON usuario.id_usuario = evento.id_usuario
            WHERE evento.id_usuario = '$id_usuario'";
    
    $resultado_array = mysqli_fetch_all(mysqli_query($conexao, $sql),MYSQLI_ASSOC);
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
            <th scope="col">ID</th>
            <th scope="col">Nome do criador</th>
            <th scope="col">Nome do evento</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data</th>
            <th scope="col">Hora</th>
            <th scope="col">CEP</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Banner</th>
            <th scope="col">Opções</th>
            </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($resultado_array as $evento):
                    ?>
                        <tr>
                            <td><?php echo $evento['id_evento']; ?></td>
                            <td><?php echo $evento['nome_usuario']; ?></td>
                            <td><?php echo $evento['nome']; ?></td>
                            <td><?php echo $evento['descricao']; ?></td>
                            <td><?php echo $evento['dt_evento']; ?></td>
                            <td><?php echo $evento['hora']; ?></td>
                            <td><?php echo $evento['cep']; ?></td>
                            <td><?php echo $evento['cidade']; ?></td>
                            <td><?php echo $evento['estado']; ?></td>
                            <td><img width="50" src="./img/banners/<?php echo $evento['img'] ?>" alt="Imagem do banner"></td>
                            <td>
                                <a class="btn btn-info" href="editar_evento.php?id_evento=<?php echo $evento['id_evento']?>">
                                    Editar</a>
                            </td>
                            
                        </tr>
                    <?php
                    endforeach;
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