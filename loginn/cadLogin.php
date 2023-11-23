<?php
include "../conexaoBD.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
   <h1> Tela de Cadastro </h1>
</head>

<body>
    <form action="inserirLogin.php" method="POST">
        Usuario <input type="text" name="usuario"> </br>
        Senha: <input type="text" name="senha"> </br>
        Acesso: <input type="text" name="nivelAcesso"> </br>
         
     <input type="submit" value="Salvar">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
</body>

</html>