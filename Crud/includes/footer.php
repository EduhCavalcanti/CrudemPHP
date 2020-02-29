<?php
  include_once '../php_action/db_connect.php';
?>
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
        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($connect, $sql);
        while($dados = mysqli_fetch_array($resultado));
      ?>
        <tr>
          <td><?php echo $dados['nome']?></td>
          <td><?php echo $dados['nascimento']?></td>
          
        </tr>
<?php endwhile ?>
      </tbody>
    </table>
  </div>
</div>
  </body>
</html>

