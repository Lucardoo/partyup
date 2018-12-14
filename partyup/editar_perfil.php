<?php
require_once('inc/cabecalho.php');

if(isset($_SESSION['email'])){

      $id_usuario = $_SESSION['id_usuario'];
      $sql="SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
      $resultado=mysqli_query($conexao,$sql);
      $dados=mysqli_fetch_array($resultado);

    ?>
      <div class="text-center mb-4">
      <form class="form-signin text-center" action="altera_perfil.php" method="post">

          <label>Nome</label><br>
          <input type="text" name="nome" value="<?php echo $dados['nome']; ?>">
          <br>

          <label>senha</label><br>
          <input type="password" name="senha" value="<?php echo $dados['senha']; ?>">
          <br>

          <label>CEP</label><br>
          <input type="text" name="cep" value="<?php echo $dados['cep']; ?>">
          <br>

          <label>Cidade</label><br>
          <input type="text" name="cidade" value="<?php echo $dados['cidade']; ?>">
          <br>

          <label>Estado</label><br>
          <input type="text" name="estado" value="<?php echo $dados['estado']; ?>">
          <br><br><br>
          
            <label><button class="btn btn-dark mr-5" type="submit" name="botao">Editar</button>
            <a href="index.php" class="btn btn-dark">Voltar</a>
            </label>
      </form>
      </div>
<?php
}
else{
  header('Location: index.php');
}
require_once('inc/rodape.php');
?>