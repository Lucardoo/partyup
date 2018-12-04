<?php
require_once('inc/cabecalho.php');
if(isset($_SESSION['email'])){
?>
<div class="container mt-3">
    <img class="form_logo mb-3 mt-3" src="img/form_festa1.png">
    <form action="cria_evento.php" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="banner">Upload de banner</label><br>
                <input type="hidden" name ="MAX_FILE_SIZE" value="200000">
                <input type="file" name="banner">
            </div>
        </div>    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome do evento</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="form-group col-md-4">
                <label for="dt_evento">Dia do evento</label>
                <input type="date" class="form-control" name="dt_evento">  
            </div>
            <div class="form-group col-md-2">
                <label for="hora">Horario</label>
                <input type="text" class="form-control" name="hora" placeholder="Ex: 20:30">  
            </div>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea type="text" class="form-control" name="descricao"></textarea>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="Ex: Avenida Bento Gonçalvez">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" placeholder="Ex: Pelotas">
            </div>
            <div class="form-group col-md-3">
                <label for="estado">Estado</label>
                <select name="estado" class="form-control">
                <option selected>Escolha...</option>
                <option>RS</option>
                <option>SC</option>
            </select>
            </div>
                <div class="form-group col-md-3">
                <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" placeholder="Ex: 96058785">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success mb-3 my-2 my-sm-0" >Publicar evento</button>
    </form>
</div>
<?php
require_once('inc/rodape.php');
}
else{
    header('Location: index.php');
}
?>