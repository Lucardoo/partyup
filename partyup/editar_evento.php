<?php
require_once('inc/cabecalho.php');

if($_SESSION['admin'] == 1){
    $id_evento=$_GET['id_evento'];

      $sql="SELECT * FROM evento WHERE id_evento='$id_evento'";
      $resultado=mysqli_query($conexao,$sql);
      $dados=mysqli_fetch_array($resultado);

    ?>

<body>
<div class="container mt-3 mb-3">
    <form id="form_evento" action="altera_evento.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_evento" value="<?php echo $id_evento ?>">
    <input type="hidden" name="id_usuario" value="<?php echo $dados['id_evento']; ?>">
        <div class="form-row">
            <div class="form-group col-md-6 mt-2">
                <label for="banner">Upload de banner</label><br>
                <input type="hidden" name ="MAX_FILE_SIZE" value="200000">
                <input type="file" name="banner">
            </div>
        </div>    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome do evento</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $dados['nome']; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="dt_evento">Dia do evento</label>
                <input type="date" class="form-control" name="dt_evento" required>  
            </div>
            <div class="form-group col-md-2">
                <label for="hora">Horario</label>
                <input type="text" class="form-control" name="hora" value="<?php echo $dados['hora']; ?>">  
            </div>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea type="text" class="form-control" name="descricao" ><?php echo $dados['descricao']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="endereco">Local ou endereço</label>
            <input type="text" class="form-control" name="endereco" value="<?php echo $dados['endereco']; ?>">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" value="<?php echo $dados['cidade']; ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="estado">Estado</label>
                <select name="estado" class="form-control">
                <option selected>RS</option>
                <option>SC</option>
            </select>
            </div>
                <div class="form-group col-md-3">
                <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" value="<?php echo $dados['cep']; ?>">
            </div>
            <button type="submit" class="btn btn-outline-success mb-3 my-2 my-sm-0" >Alterar evento</button>
        </div>
    </form>
</div>
<?php
require_once('inc/rodape.php');
}
else{
    header('Location: index.php');
}
?>