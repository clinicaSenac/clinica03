<?php
include "../conexaoBD.php";

$txtdataConsulta = $_POST['dataConsulta'];
$txtretorno = $_POST['retornoConsulta'];
$txtfk_paciente = $_POST['fk_cliente'];
$txtfk_medico = $_POST['fk_medico'];
$txtstatus = $_POST['statusC'];

$sql =  "insert into consulta(dataConsulta,retornoConsulta,fk_cliente,fk_medico,statusC)
         values('$txtdataConsulta' , '$txtretorno', '$txtfk_paciente', '$txtfk_medico','$txtstatus')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: listarConsulta.php");
} else {
    echo "Falha na Página Salvar Paciente: " . mysqli_errno($conn);
}
?>