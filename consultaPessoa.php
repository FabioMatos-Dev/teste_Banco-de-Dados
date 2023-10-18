<?php
include "conecta.php";
$sql = "SELECT * FROM PESSOA";
//Busca na tabela PESSOA todos os registros, ou linhas
$rs = mysqli_query($conexao,$sql);
$total_registros = mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="consulta_style.css">
    <title>Consulta Pessoa</title>
</head>
<body>
    <header>
        <h1>RELAÇÃO DE PESSOAS</h1>
    </header>

    <div class="flex-container">
        <table style="margin-left: 50px;margin-right: 50px;background-color:white;height:150%;width:150%;"; cellspacing="0" border="1">
            <thead>
                <tr>
                    <th style="background-color:#B2FE66";>Nome</th>
                    <th style="background-color:#FDDC53";>Celular</th>
                    <th style="background-color:#82C2D1";>E-mail</th>
                    <th style="background-color:#CED315";>Ações</th>
                </tr>
            </thead>
        <?php
            while ($reg = mysqli_fetch_array($rs)){
                $id = $reg["IDPESSOA"];
                $Nome = $reg["NOME"];
                $Celular = $reg["CELULAR"];
                $Email = $reg["EMAIL"];
            //} While não será fechado aqui
        ?>
        <tr>
            <td><?php print $Nome; ?></td>
            <td><?php print $Celular; ?></td>
            <td><?php print $Email; ?></td>
        </tr>
        <?php } ?>
        </table>
    </div>
    
    &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;
    <div>
        <a href="http://localhost/TADS2023/#">
        <img src="volte.png" alt="Image" height="40" width="80" /></a>
    </div>
</body>
</html>
