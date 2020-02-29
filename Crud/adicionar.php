<div class="add">

    <h1>Adicionar Aluno</h1>

    <div class="formulario">

      <form action="php_action/create.php" method='POST'>
        <label for="nome">Nome do aluno:</label>
          <input type="text" name="nome" id="nome">

          <label for="nascimento">Data de nascimento do aluno:</label>
          <input type="number" name="nascimento" id="nascimento">

          <button class='btn-add' name='btn-cadastrar' type="submit">Adicionar aluno</button>
          <a href='index.php' type="submit">Lista de alunos</a>
      
      </form>
    </div>

</div>