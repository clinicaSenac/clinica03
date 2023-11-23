<?php
include ('conexaoBD.php');

$usuario= $_POST['usuario'];
$senha = $_POST['senha'];

$query = "select id, usuario, senha from loginP where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {

    header('Location: principal.php');
    exit ();

} else {
    header('Location: index.php');
    exit ();
}
?>