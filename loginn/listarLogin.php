<html>
<body>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <table id="example" class="table table-striped table-sm" style="width:100%">
        <thead style="font-size:80%;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Usuário</th>
                <th scope="col">Senha</th>
                <th scope="col">Acesso</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../conexaoBD.php";

            $sql = "select * from loginP ORDER BY id DESC";

            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr style="font-size:70%;">
                    <td><?php echo $row['id']; ?></td>
                 
                                <td><?php echo $row['usuario']; ?></td>
                                <td><?php echo $row['senha']; ?></td>
                                <td><?php echo $row['nivelAcesso']; ?></td>                              
                                                           
                                
                                <td>
                                    <a href="editarLogin.php?Codigo=<?php echo $row['id'] ?>"class="btn btn-success btn-sm"> Editar </a>
                                    <a href="excluir.php?Codigo=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm"onclick="return confirm('Tem Certeza que deseja excluir este registro?')" > Excluir </a>
                                </td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
</body>
</html>