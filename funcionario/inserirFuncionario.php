
<?php
include "../conexaoBD.php";

$txtnome = $_POST['nome'];
$txtendereco =$_POST['endereco'];
$txtbairro = $_POST['bairro'];
$txtcidade = $_POST['cidade'];
$txtfuncao = $_POST['funcao'];
$txtsexo = $_POST['sexo'];
$txtcpf = $_POST['cpf'];
$txtdataNascimento = $_POST['dataNascimento'];
$txtcelular = $_POST['celular'];
$txtemail = $_POST['email'];




$sql = "insert into funcionario(nome,endereco,bairro,cidade,funcao,sexo,cpf,dataNascimento,celular,email) values('$txtnome','$txtendereco','$txtbairro','$txtcidade','$txtfuncao','$txtsexo','$txtcpf','$txtdataNascimento','$txtcelular','$txtemail')";

$result =  mysqli_query($conn,$sql);

if($result) {
    header("Location: cadFuncionario.php");
}
else{
    echo "Falha na pagina salvar funcionario:" . mysqli_errno($conn);
}

