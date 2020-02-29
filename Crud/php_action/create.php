<?php

//Conexão 

require_once 'db_connect.php';

//Vai verificar se existi o botão cadastrar, se existir vai pegar as variáveis
if(isset($_POST['btn-cadastrar'])):
$nome = mysqli_escape_string($connect, $_POST['nome']);
$nascimento = mysqli_escape_string($connect, $_POST['nascimento']);

//Vai inserir na tabela aluno essas variáveis 
$sql = "INSERT INTO alunos (nome, nascimento ) VALUES ('$nome', $nascimento)";

if(mysqli_query($connect, $sql)):
  header('Location: ../index.php?sucesso');
else:
  header('Location: ../index.php?erro');
endif;  

endif;
