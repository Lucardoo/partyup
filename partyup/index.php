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
                <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
        </nav>
</section>

<section class="listagem">

        <div class='container-fluid'>
        <div class='row'>
        <div class="card col-xs-12 col-md-4">
          <img src="img/banners/2theway.jpg" alt="The way" style="width:100%">
          <h1>Tailored Jeans</h1>
          <p>Some text about the jeans..</p>
          <p><button>Ver mais</button></p>
        </div>
        <div class='col-xs-12 col-md-4'>2</div>
        <div class='col-xs-12 col-md-4'>3</div>
    </div>
    <div class='row'>
        <div class='col-xs-12 col-md-4'>4</div>
        <div class='col-xs-12 col-md-4'>5</div>
        <div class='col-xs-12 col-md-4'>6</div>
    </div>
    <div class='row'>
        <div class='col-xs-12 col-md-4'>7</div>
        <div class='col-xs-12 col-md-4'>8</div>
        <div class='col-xs-12 col-md-4'>9</div>
    </div>
</div>

</section>

<?php
require_once('inc/rodape.php');
?>