
<?php
include "../conexaoBD.php";

$txtnome = $_POST['nome'];
$txtendereco =$_POST['endereco'];
$txtbairro = $_POST['bairro'];
$txtcidade = $_POST['cidade'];
$txtcpf = $_POST['CPF'];
$txtvalorConsulta = $_POST['valorConsulta'];
$txtstatusMedico = $_POST['statusMedico'];
$txtespecialidade = $_POST['especialidade'];




$sql = "insert into medico(nome,endereco,bairro,cidade,CPF,valorConsulta,statusMedico,especialidade) values('$txtnome','$txtendereco','$txtbairro','$txtcidade','$txtcpf','$txtvalorConsulta','$txtstatusMedico','$txtespecialidade')";

$result =  mysqli_query($conn,$sql);

if($result) {
    header("Location: cadmedico.php");
}
else{
    echo "Falha na pagina salvar Médico:" . mysqli_errno($conn);
}

