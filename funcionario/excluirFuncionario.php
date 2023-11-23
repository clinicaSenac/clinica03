<?php

include "../conexaoBD.php";
$id = $_GET['Codigo'];

$sql = "delete from funcionario where id= $id";
$result = mysqli_query($conn, $sql);

if($result){
  header("Location: listarFuncionario.php");
}
?>