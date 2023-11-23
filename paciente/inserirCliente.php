
<?php
include "../conexaoBD.php";

$txtnome = $_POST['nome'];
$txtendereco =$_POST['endereco'];
$txtbairro = $_POST['bairro'];
$txtcidade = $_POST['cidade'];
$txtuf = $_POST['uf'];
$txtsexo = $_POST['sexo'];
$txtcpf = $_POST['cpf'];
$txtdataNascimento = $_POST['dataNascimento'];
$txtcelular = $_POST['celular'];
$txtemail = $_POST['email'];




$sql = "insert into cliente(nome,endereco,bairro,cidade,uf,sexo,cpf,dataNascimento,celular,email) values('$txtnome','$txtendereco','$txtbairro','$txtcidade','$txtuf','$txtsexo','$txtcpf','$txtdataNascimento','$txtcelular','$txtemail')";

$result =  mysqli_query($conn,$sql);

if($result) {
    header("Location: cadCliente.php");
}
else{
    echo "Falha na pagina salvar paciente:" . mysqli_errno($conn);
}

