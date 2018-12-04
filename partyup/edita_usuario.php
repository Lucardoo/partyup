<?php
require_once('inc/cabecalho.php');

if($_SESSION['admin'] == 1){
    $id_usuario=$_GET['id_usuario'];

      $sql="SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
      $resultado=mysqli_query($conexao,$sql);
      $dados=mysqli_fetch_array($resultado);

    ?>
      <div class="text-center mb-4">
      <form class="form-signin text-center" action="altera_usuario.php" method="post">

          <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario']; ?>">

          <label>Nome</label><br>
          <input type="text" name="nome" value="<?php echo $dados['nome']; ?>">
          <br>

          <label>Email</label><br>
          <input type="email" name="email" value="<?php echo $dados['email']; ?>">
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
          
            <button class="btn btn-dark" type="submit" name="botao">Editar Usuário</button>
            <a href="crud_usuario.php" class="btn btn-dark">Voltar</a>
      </form>
      </div>
<?php
}
else{
  header('Location: index.php');
}
?>