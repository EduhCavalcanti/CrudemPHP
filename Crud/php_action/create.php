<?php
//Iniciando a Sessão
session_start();
//Conexão com o bd
require_once 'db_connect.php';

//Vai verificar se existi o botão cadastrar, se existir vai pegar as variáveis
if(isset($_POST['btn-cadastrar'])):
$nome = mysqli_escape_string($connect, $_POST['nome']);
$nascimento = mysqli_escape_string($connect, $_POST['nascimento']);

//Vai inserir na tabela aluno essas variáveis 
$sql = "INSERT INTO alunos (nome, nascimento ) VALUES ('$nome', '$nascimento')";

if(mysqli_query($connect, $sql)):
  $_SESSION['mensagem'] = "Cadastrado com sucesso";
  header('Location: ../index.php');
else:
  $_SESSION['mensagem'] = "Erro ao cadastrar";
  header('Location: ../index.php');
endif;  

endif;
