<?php

//Conexão com o banco de dados
$servername = 'localhost:3308';
$username = 'root';
$password = '';
$db_name = 'crud';
//Fazendo conexão utilizando 'mysqli'
$connect = mysqli_connect($servername, $username, $password, $db_name);
//Ajeitando a codificação das palavras no mysql
mysqli_set_charset($connect, "utf8");

//Se der algum erro
if(mysqli_connect_error()):
  echo 'Erro ao conectar com o banco de dados'.mysqli_connect_error();
endif;

?>