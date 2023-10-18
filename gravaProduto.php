<?php
$descricao = $_POST['cDescricao'];
$qtde = $_POST['cQTDE'];
$valor = $_POST['cValor'];
//conecta com BD
include "conecta.php";
//comando para inserir
$sql = "INSERT INTO PRODUTO (";
$sql = $sql."DESCRICAO, QTDE, VALOR)";
$sql = $sql." VALUES ";
$sql = $sql."('".$descricao."',";
$sql = $sql." '".$qtde."',";
$sql = $sql." '".$valor."')";
echo $sql;

$rs = mysqli_query($conexao,$sql);
if(!$rs){
    echo  $sql;
    echo 'Problemas na gravação!!';
    echo '<meta http-equiv="refresh"
        content="10";url=index.php/>';
    return;
}
mysqli_close($conexao);
echo "<br>Gravação executada com sucesso!!!!"

?>

&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<div>
    <a href="http://localhost/TADS2023/#">
    <img src="volte.png" alt="Image" height="40" width="80" /></a>
</div>
