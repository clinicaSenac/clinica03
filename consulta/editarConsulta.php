<?php
include "../conexaoBD.php";

$id = $_GET['Codigo'];

if (isset($_POST['submit'])) {
    $txtdataConsulta = $_POST['dataConsulta'];
    $txtdataRetorno = $_POST['retornoConsulta'];
    $txtfk_cliente = $_POST['fk_cliente'];
    $txtfk_medico = $_POST['fk_medico'];
    $txtstatusC = $_POST['statusC'];
    
    

    /*
    $txtretornoConsulta = $_POST['retornoConsulta'];
    $txtPACIENTE = $_POST['PACIENTE'];
    $txtMEDICO = $_POST['MÉDICO'];
    $txtstatusC = $_POST['statusC'];
   
  
    $sql = "UPDATE consulta set dataConsulta = '$txtdataConsulta' , retornoConsulta = '$txtretornoConsulta' , bairro = '$txtFK_' , cidade = '$txtcidade',
     CPF = '$txtCPF', valorConsulta = '$textvalorConsulta' ,  statusMedico = '$txtstatusMedico' ,especialidade = '$txtespecialidade'  where id = '$id'";

  */

    $sql = "UPDATE consulta set dataConsulta = '$txtdataConsulta', retornoConsulta ='$txtdataRetorno', fk_cliente ='$txtfk_cliente', fk_medico = '$txtfk_medico', statusC = '$txtstatusC' where idConsulta = $id";



    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: listarConsulta.php");
    } else {
        echo "Falha Página Médico: " . mysqli_errno($conn);
    }
}

?>

<html>

<head></head>

<body>


    <?php
    $sql = "SELECT * FROM consulta where idConsulta = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $sqlPaciente1 = "select cliente.id as 'id', cliente.nome as 'Paciente'  from consulta,cliente where (consulta.fk_cliente = cliente.id) and (idConsulta = '$id')";
    $result_Pac1 = mysqli_query($conn, $sqlPaciente1);


    $sqlPaciente = "select * from cliente";
    $result_Pac = mysqli_query($conn, $sqlPaciente);

    $sqlMedico1 = "select medico.id as 'id', medico.nome as 'Medico'  from consulta,medico where (consulta.fk_medico = medico.id) and (idConsulta = '$id')";
    $result_Med1 = mysqli_query($conn, $sqlMedico1);


    $sqlMedico = "select * from medico";
    $result_Med = mysqli_query($conn, $sqlMedico);


    // $row1 = mysqli_fetch_assoc($result_Med);



    //  $result = mysqli_query($conn, $sql);
    ?>
    <form method="POST" method="editarMedico.php">
        <label class="form-label">Data da Consulta: </label>
        <input type="text" class="form-control" name="dataConsulta" value="<?php echo $row['dataConsulta']; ?>"> </br>

        <label class="form-label">Data de Retorno: </label>
        <input type="text" class="form-control" name="retornoConsulta" value="<?php echo $row['retornoConsulta']; ?>"> </br>

        <label class="form-label">PACIENTE: </label>
        <select name="fk_cliente">

            <?php
            while ($dados2 = mysqli_fetch_assoc($result_Pac1)) {
            ?>
                <option selected value="<?php echo $dados2['id'] ?>">
                    <?php echo $dados2['Paciente'] ?>
                </option>
            <?php
            }
            ?>


            <?php
            while ($dados = mysqli_fetch_assoc($result_Pac)) {
            ?>
                <option value="<?php echo $dados['id'] ?>">
                    <?php echo $dados['nome'] ?>
                </option>
            <?php
            }
            ?>
        </select>
        
        <label class="form-label">MEDICO: </label>
        <select name="fk_medico">

            <?php
            while ($dados1 = mysqli_fetch_assoc($result_Med1)) {
            ?>
                <option selected value="<?php echo $dados1['id'] ?>">
                    <?php echo $dados1['Medico'] ?>
                </option>
            <?php
            }
            ?>


            <?php
            while ($dados = mysqli_fetch_assoc($result_Med)) {
            ?>
                <option value="<?php echo $dados['id'] ?>">
                    <?php echo $dados['nome'] ?>
                </option>
            <?php
            }
            ?>
        </select>

        <label class="form-label">Status : </label>
        <input type="text" class="form-control" name="statusC" value="<?php echo $row['statusC']; ?>"> </br>

            



        <button type="submit" class="btn btn-success btn-sm" name="submit">
            Atualizar
        </button>

    </form>

</body>

</html>