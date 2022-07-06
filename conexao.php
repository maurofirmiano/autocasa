<?php
$servidor = "localhost"; /*maquina a qual o banco de dados está*/
$usuario = "root"; /*usuario do banco de dados MySql*/
$senha = ""; /*senha do banco de dados MySql*/
$banco = "home"; /*seleciona o banco a ser usado*/

$conexao = mysqli_connect($servidor,$usuario,$senha) or die(mysql_error());  /*Conecta no bando de dados MySql*/


mysqli_select_db($conexao, $banco) or die("Erro ao selecionar o banco ".$banco); /*seleciona o banco a ser usado*/
