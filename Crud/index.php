<?php

//Iniciando a Sessão
session_start();
//Vai verificar se existe a sessão mensagem e se existir ele exibe
if(isset($_SESSION['mensagem'])):
  echo $_SESSION['mensagem'];
endif;
//tirando a messangem depois que atualiza a pagina
session_unset();


//Conexão 
include_once 'php_action/db_connect.php';

//Formulario de adição de aluno
// include_once 'adicionar.php';

//Header
include_once 'includes/header.php';
?>
<link rel="stylesheet" href="style.css">
<div class="row">
<div class="col">
  <table>
  <h1>Alunos</h1>
    <thead>
      <tr>
        <th>Nome do aluno</th>
        <th>Data de nascimento</th>
      </tr>
    </thead>

    <tbody>
    
    <?php
    //Vai pegar todos os dados da tabela alunos e vai jogar dentro de um loop.
      $sql = "SELECT * FROM alunos";
      $resultado = mysqli_query($connect, $sql);
      while($dados = mysqli_fetch_array($resultado)):
    ?>
      <tr>
        <td><?php echo $dados['nome']?></td>
        <td><?php echo $dados['nascimento']?></td>
        
      </tr>
<?php 
 endwhile;

?>
    </tbody>
  </table>
  <a href="adicionar.php">Adicionar novo aluno</a>
</div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>