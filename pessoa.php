<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro_style.css">
    <title>Cadastro de Pessoa</title>
</head>
<body style="padding: 15px;margin-top: 5px;background-color: #c3f5f4";>
    <header>
        <h1>CADASTRO DE PESSOA</h1>
    </header>


    <form style="padding: 15px;margin-left: 100px;margin-right: 600px;margin-top:30px;border:2px solid red;background-color:#A6D67A ";action="gravaPessoa.php" method="post">
        Nome: &nbsp;&nbsp;&nbsp;<input type="text" name="cNome"><br><br>
        Celular: &nbsp;<input type="text" name="cCelular"><br><br>
        Email: &nbsp;&nbsp;&nbsp;<input type="text" name="cEmail"><br><br>
    <input type="submit" value="Salvar" name="b1">
    </form>
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
