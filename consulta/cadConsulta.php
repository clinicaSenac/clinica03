<?php
include "../conexaoBD.php";

$sql = "select id, nome from cliente";

$result = mysqli_query($conn, $sql);

$sqlMedico = "select id, nome from medico";

$resultMed = mysqli_query($conn, $sqlMedico);
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h3>Tela de Cadastro</h3>
</head>

<body>
    <form action="inserirConsulta.php" method="POST">
        Data Consulta: <input type="date" name="dataConsulta"> </br>
        Data Retorno: <input type="date" name="retornoConsulta"> </br>
        Paciente:
        <select name="fk_cliente" >
            <option value="" selected="">Selecione... </option>
            <?php
            while ($dados = mysqli_fetch_assoc($result)) {
            ?>
                <option value="<?php echo $dados['id'] ?>">
                    <?php echo $dados['nome'] ?>
                </option>
            <?php
            }
            ?>
        </select> </br>
        Médico:<select name="fk_medico" >
            <option value="" selected="">Selecione... </option>
            <?php
            while ($dados = mysqli_fetch_assoc($resultMed)) {
            ?>
                <option value="<?php echo $dados['id'] ?>">
                    <?php echo $dados['nome'] ?>
                </option>
            <?php
            }
            ?>
        </select>
        Status:<select name="status" >
                <option value="" selected="">Selecione... </option>
                <option value="PAGO" >SIM</option>
                <option value="NAO_PAGO" >NÃO </option>
            </select>


     <input type="submit" value="Salvar">
    </form>
</body>

</html>