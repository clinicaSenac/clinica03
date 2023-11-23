<?php
include "../conexaoBD.php";

$id = $_GET['Codigo'];

if (isset($_POST['submit'])) {
    $txtnome = $_POST['nome'];
    $txtendereco = $_POST['endereco'];
    $txtbairro = $_POST['bairro'];
    $txtcidade = $_POST['cidade'];
    $txtCPF = $_POST['CPF'];
    $textvalorConsulta = $_POST['valorConsulta'];
    $txtstatusMedico = $_POST['statusMedico'];
    $txtespecialidade = $_POST['especialidade'];
    
  
    $sql = "UPDATE medico set nome = '$txtnome' , endereco = '$txtendereco' , bairro = '$txtbairro' , cidade = '$txtcidade',
     CPF = '$txtCPF', valorConsulta = '$textvalorConsulta' ,  statusMedico = '$txtstatusMedico' ,especialidade = '$txtespecialidade'  where id = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: listarMedico.php");
    } else {
        echo "Falha Página Médico: " . mysqli_errno($conn);
    }
}

?>

<html>

<head></head>

<body>


    <?php
    $sql = "SELECT * FROM Medico where id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    //  $result = mysqli_query($conn, $sql);
    ?>
    <form method="POST" method="editarMedico.php">
        <label class="form-label">Nome: </label>
        <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>"> </br>

        <label class="form-label">Endereco: </label>
        <input type="text" class="form-control" name="endereco" value="<?php echo $row['endereco']; ?>"> </br>

        <label class="form-label">Bairro: </label>
        <input type="text" class="form-control" name="bairro" value="<?php echo $row['bairro']; ?>"> </br>

        <label class="form-label">Cidade: </label>
        <input type="text" class="form-control" name="cidade" value="<?php echo $row['cidade']; ?>"> </br>

        <label class="form-label">CPF: </label>
        <input type="text" class="form-control" name="CPF" value="<?php echo $row['CPF']; ?>"> </br>

        <label class="form-label">Valor da Consulta: </label>
        <input type="text" class="form-control" name="valorConsulta" value="<?php echo $row['valorConsulta']; ?>"> </br>

        <label class="form-label">Status do Médico: </label>
        <input type="text" class="form-control" name="statusMedico" value="<?php echo $row['statusMedico']; ?>"> </br>

        <label class="form-label">Especialidade: </label>
        <input type="text" class="form-control" name="especialidade" value="<?php echo $row['especialidade']; ?>"> </br>

        <button type="submit" class="btn btn-success btn-sm" name="submit">
            Atualizar
        </button>

    </form>

</body>

</html>