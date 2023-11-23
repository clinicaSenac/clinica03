<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<div class="container shadow-sm p-3 mt-3 mb-3 bg-white rounded">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-0 mb-0">
                <li class="breadcrumb-item"><a href="cadConsulta.php" class="btn btn-primary btn-sm">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lista</li>
            </ol>
        </nav>
    </div>

    <div class="container">


    <h6 class="text-center"> Lista de Consultas</h6>
    <table id="example" class="table table-striped table-sm mt-5" style="width:100%">
        <thead style="font-size:80%;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data da Consulta</th>
                <th scope="col">Retorno</th>
                <th scope="col">Paciente</th>
                <th scope="col">Médico</th>
                <th scope="col">Status</th>                
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../conexaoBD.php";

            $sql = "select idConsulta, dataConsulta, retornoConsulta, cliente.nome as 'PACIENTE', medico.nome as 'MÉDICO', statusC
            from consulta, cliente, medico
            where (consulta.fk_cliente = cliente.id) and
            (consulta.fk_medico = medico.id)";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr style="font-size:70%;">
                    <td><?php echo $row['idConsulta']; ?></td>
                    <td><?php echo $row['dataConsulta']; ?></td>
                    <td><?php echo $row['retornoConsulta']; ?></td>
                    <td><?php echo $row['PACIENTE']; ?></td>
                    <td><?php echo $row['MÉDICO']; ?></td>
                    <td><?php echo $row['statusC']; ?></td>
                    
                    <td>
                        <a href="editarConsulta.php?Codigo=<?php echo $row['idConsulta']; ?>" class="btn btn-success btn-sm">Editar</a>
                        
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>