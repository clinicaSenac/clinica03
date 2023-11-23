<?php

include "../conexaoBD.php";
$id = $_GET['Codigo'];

$sql = "delete from medico where id= $id";
$result = mysqli_query($conn, $sql);

if($result){
  header("Location: listarMedico.php");
}
?>