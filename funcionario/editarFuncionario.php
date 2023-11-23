<?php
include "../conexaoBD.php";

$id = $_GET['Codigo'];

if (isset($_POST['submit'])) {
    $txtnome = $_POST['nome'];
    $txtendereco = $_POST['endereco'];
    $txtbairro = $_POST['bairro'];
    $txtcidade = $_POST['cidade'];
    $txtfuncao = $_POST['funcao'];
    $txtsexo = $_POST['sexo'];
    $txtCPF = $_POST['CPF'];
    $dataNasc = $_POST['dataNascimento'];
    $txtcelular = $_POST['celular'];
    $txtemail = $_POST['email'];
    
  
    $sql = "UPDATE funcionario set nome = '$txtnome' , endereco = '$txtendereco' , bairro = '$txtbairro' , cidade = '$txtcidade',
     funcao = '$txtfuncao', sexo = '$txtsexo', CPF = '$txtCPF', dataNascimento = '$dataNascimento' ,  celular = '$txtcelular' ,email = '$txtemail'  where id = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: listarFuncionario.php");
    } else {
        echo "Falha Página Funcionário: " . mysqli_errno($conn);
    }
}

?>

<html>

<head></head>

<body>


    <?php
    $sql = "SELECT * FROM funcionario where id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    //  $result = mysqli_query($conn, $sql);
    ?>
    <form method="POST" method="editarFuncionario.php">
        <label class="form-label">Nome: </label>
        <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>"> </br>

        <label class="form-label">Endereco: </label>
        <input type="text" class="form-control" name="endereco" value="<?php echo $row['endereco']; ?>"> </br>

        <label class="form-label">Bairro: </label>
        <input type="text" class="form-control" name="bairro" value="<?php echo $row['bairro']; ?>"> </br>

        <label class="form-label">Cidade: </label>
        <input type="text" class="form-control" name="cidade" value="<?php echo $row['cidade']; ?>"> </br>

        <label class="form-label">Função: </label>
        <input type="text" class="form-control" name="funcao" value="<?php echo $row['funcao']; ?>"> </br>

        
        <label> Sexo:</label>
        <input type="radio" class="form-check-input" name="sexo" id="masculino" value="Masculino" <?php echo ($row['sexo'] == 'masculino') ? "checked" : ""; ?>>
        <label for="masculino" class="form-input-label">Masculino</label>
        &nbsp;
        <input type="radio" class="form-check-input" name="sexo" id="feminino" value="Feminino" <?php echo ($row['sexo'] == 'feminino') ? "checked" : ""; ?>>
        <label for="feminino" class="form-input-label">Feminino</label> </br>

        <label class="form-label">CPF: </label>
        <input type="text" class="form-control" name="CPF" value="<?php echo $row['CPF']; ?>"> </br>

        <label class="form-label">Nascimento: </label>
        <input type="text" class="form-control" name="dataNascimento" value="<?php echo $row['dataNascimento']; ?>"> </br>

        <label class="form-label">Celular: </label>
        <input type="text" class="form-control" name="celular" value="<?php echo $row['celular']; ?>"> </br>

        <label class="form-label">Email: </label>
        <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>"> </br>

        <button type="submit" class="btn btn-success btn-sm" name="submit">
            Atualizar
        </button>

    </form>

</body>

</html>