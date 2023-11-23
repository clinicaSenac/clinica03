<?php
include "../conexaoBD.php";

$txtusuario = $_POST['usuario'];
$txtsenha = $_POST['senha'];
$txtacesso = $_POST['nivelAcesso'];


$sql =  "insert into loginP(usuario,senha,nivelAcesso)
         values('$txtusuario' , '$txtsenha', '$txtacesso')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: listarLogin.php");
} else {
    echo "Falha na Página Salvar usuario: " . mysqli_errno($conn);
}
?>