<html>
<head>

</head>
<body>
<?php
/*
$local = "185.224.137.55";
$usuario = "u484271134_senac";
$senha = "is@el1988";
$bancoDados = "u484271134_senac";
*/
$local = "localhost";
$usuario = "root";
$senha = "";
$bancoDados = "clinica";

$conn = mysqli_connect($local,$usuario,$senha,$bancoDados);

if(!$conn){
    die("Conexao falhou!" . mysqli_connect_error());
}


?>
</body>
</html>