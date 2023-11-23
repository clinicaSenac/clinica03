<?php

include "../conexaoBD.php";

$id = $_GET['Codigo'];

$sql = "delete from loginP where id= $id";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: listarLogin.php");
  }

?>