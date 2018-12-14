<?php 
require_once('inc/cabecalho.php');
?>

<section class="introducao">
        <img class="logo_introducao" src="img/logo_branco.png" alt="Logo">
        <h2>- Venha conhecer os eventos mais próximos de você<br><br>
                - Gerencie seus próprios eventos<br><br>
                 - Chame seus amigos !        
        </h2>
</section>

<section class="busca">
        <nav class="navbar navbar-light bg-light">
                <form class="form-inline" action="index.php" method="post">
                        <input class="form-control mr-sm-2" type="search" name="busca" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
        </nav>
</section>
        
<section class="listagem">
        <div class='container-fluid'>
	<div class='row'>

        <?php
        if(isset($_SESSION['busca'])){
        foreach($_SESSION['busca'] as $evento){
        ?>
          <div class="card col-xs-12 col-md-4 mb-4 py-2">
            <div class="img">
              <img src="img/banners/<?php echo $evento['img']; ?>" style="width:100%">
            </div>  
              <h1><?php echo $evento['nome'];?></h1>
              <p><?php echo $evento['endereco'];?><br><?php echo $evento['hora'];?></p>
              <div class="more"><button href="<?php echo'/pagina_evento.php?id_evento='.$eventos['id_evento']?>">Ver mais</button></div>
          </div>
        <?php
        }  
        }else{        
        $sql = "SELECT * FROM evento WHERE dt_evento > now() Order by dt_evento";
        $resultado = mysqli_query($conexao, $sql);
        $array = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        foreach($array as $evento){
        $data = $evento['dt_evento'];

        ?>
          <div class="card col-xs-12 col-md-4 mb-4 py-2">
            <div class="img">
              <img src="img/banners/<?php echo $evento['img']; ?>" style="width:100%">
            </div>  
              <h1><?php echo $evento['nome'];?></h1>
              <p><?php echo $evento['endereco'];?><br>Dia <?php echo date('d/m', strtotime(str_replace('-','/', $data))); ?> as <?php echo $evento['hora'];?></p>
              <div class="more"><button href="<?php echo'/pagina_evento.php?id_evento='.$eventos['id_evento']?>">Ver mais</button></div>
          </div>
        
<?php 
}
} ?>
        </div>

</section>

<?php
if (isset($_GET['email']) && $_GET['email'] ==  "false") {
        ?>
        <script> alert('Email nao encontrado') </script>
        <?php
}
if (isset($_GET['email']) && $_GET['email'] ==  "true") {
        ?>
        <script> alert('Foi enviado a sua nova senha para seu') </script>
        <?php
}
require_once('inc/rodape.php');
?>