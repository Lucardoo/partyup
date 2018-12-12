<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>PartyUp</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

        <!-- NAVBAR -->
    
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a href="index.php" class="link-logo"><img class="logo ml-5" src="img/logo.png"></a>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">

    <?php
    if (isset($_SESSION['email']) ){

        if($_SESSION['admin']==0) {

    ?>    
                    <a href="logout.php" class="mr-3">Logout</a>
                    <a href="meus_eventos.php" class="mr-3">Meus eventos</a>
                </li>
                </ul>
                    <button type="button" class="btn btn-outline-success my-2 my-sm-0" onclick="window.location.href='criar_evento.php'">Cadastre seu evento</button>
    <?php
        }
        else{
    ?>
            <a href="logout.php" class="mr-2">Logout</a>
        </li>
        </ul>
        <button type="button" class="btn btn-outline-success my-2 my-sm-0" onclick="window.location.href='cruds.php'">Painel de Controle</button>
    <?php
        }
      }
    else{  
    ?>
                    <a id="btnlogin" class="nav-link" data-toggle="modal" data-target=".bd-example-modal-sm">Login<span class="sr-only">(current)</span></a>
                </li>
                </ul>
                    <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target=".bd-example-modal-lg">Faça seu cadastro</button>
    <?php
    }
    ?>
        <!-- MODAL LOGIN-->

        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form id="formLogar" class="logar ml-5 mr-5 mb-5 mt-5" method="POST" action="logar.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                    </div>
                    <a id="btnlogin" class="nav-link mb-2" data-toggle="modal" data-target=".modalsenha">Esqueceu sua senha ?</a>
                    <button type="submit" class="btn btn-block btn-outline-success my-2 my-sm-0">Logar</button>
                    </form>
                </div>
            </div>
            </div>  

            <!-- MODAL ESQUECI MINHA SENHA-->

            <div class="modal fade bd-example-modal-sm modalsenha" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form class="logar ml-5 mr-5 mb-5 mt-5" method="POST" action="logar.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-block btn-outline-success my-2 my-sm-0">Enviar</button>
                    </form>
                </div>
            </div>
            </div>

        <!-- MODAL CADASTRO -->
        
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="cadastro ml-5 mr-5 mb-5 mt-5" method="POST" action="cadastrar.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group col-md-6">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senha">
                </div>
            </div>
            <div class="form-group">
                <label for="senha">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>       
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade">
            </div>
            <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <select name="estado" class="form-control" required>
                    <option selected>RS</option>
                    <option>SC</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Cadastar</button>
        
        </form>
    </div>
</div>
</div>        

    </form>
  </div>
</nav>
<?php
require_once('rodape.php');
?>