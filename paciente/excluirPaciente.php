<?php

include "../conexaoBD.php";
$id = $_GET['Codigo'];

$sql = "delete from cliente where id= $id";
$result = mysqli_query($conn, $sql);

if($result){
  header("Location: listarPaciente.php");
}
?>