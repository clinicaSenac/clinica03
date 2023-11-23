<?php
include "../conexaoBD.php";

$txtdata = $_POST['data'];
$txthora =$_POST['hora'];
$txtstatus = $_POST['status'];





$sql = "insert into ponto(dataP,hora,statusP) values('$txtdata','$txthora','$txtstatus')";

$result =  mysqli_query($conn,$sql);

if($result) {
    header("Location: cadPonto.php");
}
else{
    echo "Falha na pagina salvar Ponto:" . mysqli_errno($conn);
}
