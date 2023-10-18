<?php
//Realiza a conexão com o mysql
$conexao = mysqli_connect ("localhost", "root","");
//Identifica a base de dados
$bancodedados = "bdaula10102023";
//Conecta  o mysql ao banco de dados
$bd = mysqli_select_db($conexao,$bancodedados);
if(mysqli_connect_errno()){
    printf("Falha na conexão: %s \n",
       mysqli_connect_errno());
    die();
}
?>
