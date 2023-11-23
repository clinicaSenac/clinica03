<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <table id="example" class="table table-striped table-sm" style="width:100%">
        <thead style="font-size:80%;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Status</th>
              
        </thead>
        <tbody>
            <?php
            include "../conexaoBD.php";

            $sql = "select * from ponto ORDER BY id DESC";

            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr style="font-size:70%;">
                    <td><?php echo $row['id']; ?></td>                  
                                <td><?php echo $row['dataP']; ?></td>
                                <td><?php echo $row['hora']; ?></td>
                                <td><?php echo $row['statusP']; ?></td>                                    
                             
                               
                </tr>
            <?php
            }
            ?>

          </tbody>
    </table>
</body>
</html>